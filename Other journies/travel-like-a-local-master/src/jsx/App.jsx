import React from 'react';
import ReactDOM from 'react-dom';
import ajaxHandler from '../../lib/ajaxHandler.js';
import DestinationInput from './DestinationInput.jsx';
import AddFriend from './AddFriend.jsx';
import Nav from "./Nav.jsx";
import SuggestionList from "./SuggestionList.jsx";
import FriendList from "./FriendList.jsx";
import SearchInput from "./SearchInput.jsx";
import AddSuggestion from "./AddSuggestion.jsx";

class App extends React.Component {
  constructor(props) {
    super(props);
    this.handleInputDest = this.handleInputDest.bind(this);
    this.handleAddFriend = this.handleAddFriend.bind(this);
    this.handleSearchDest = this.handleSearchDest.bind(this);
    this.handleAddSuggestion = this.handleAddSuggestion.bind(this);
    this.handleFriendDelete = this.handleFriendDelete.bind(this);
    this.state = {
      userName: this.props.username,
      userID: '',
      friendsToAdd: [],
      friendList: [],
      suggestionList: [],
      suggestionToAdd: {},
      destinations: [],
      weather: '',
      weatherIcon: ''
    }
  }

  componentDidMount() {
    ajaxHandler.getFriendList(this.state.userName, function (response) {
      //console.log(response.data);
      this.setState({
        friendList: response.data
      });
    }.bind(this));
    ajaxHandler.getRemainingFriends(this.state.userName, function (response) {
      this.setState({
        friendsToAdd: response.data
      });
    }.bind(this));
    if (this.state.userName === 'not logged in') {
      this.setState({ suggestionList: [] });
    }
    ajaxHandler.getDestinations(function (response) {
      this.setState({
        destinations: response
      });
    }.bind(this));
    ajaxHandler.handleGetLoggedUserID(this.state.userName, function (response) {
      //console.log(response.data);
      if (response.data.length > 0) {
        this.setState({
          userID: response.data[0].ID
        });
      }
    }.bind(this));
  }

  handleInputDest(destination) {
    var that = this;
    ajaxHandler.handlePostDestination(destination, function (response) {
      ajaxHandler.getDestinations(function (response) {
        that.setState({
          destinations: response
        });
      });
    });
  }

  handleAddFriend(friend, friendList) {
    var that = this;
    ajaxHandler.handleAddFriend(this.state.userName, friend, function () {
      ajaxHandler.getFriendList(that.state.userName, function (response) {
        that.setState({
          friendList: response.data
        });
      });
      ajaxHandler.getRemainingFriends(that.state.userName, function (response) {
        that.setState({
          friendsToAdd: response.data
        });
      });
    });
  }

  handleSearchDest(location) {
    //get weather data
    ajaxHandler.getWeatherData(location, function (response) {
      var weather = response.data.query.results.channel.item.condition.temp + "°C and " + response.data.query.results.channel.item.condition.text;
      this.setState({ weather: weather });
    }.bind(this));

    if (this.state.userName === 'not logged in') {
      var source = 'Google';
      var suggestionList = [];
      ajaxHandler.getPlacesFromGoogleMaps(location, function (suggestions) {
        for (var i = 0; i < suggestions.length; i++) {
          if (suggestions[i].photos !== undefined) {
            var link = suggestions[i].photos[0].html_attributions[0].match(/href="(.*?")/g);
            link = link[0].slice(6).slice(0, -1);
            suggestionList.push({ suggestionName: suggestions[i].name, suggestionSource: source, suggestionLink: link, target: '_blank' });
          } else {
            suggestionList.push({ suggestionName: suggestions[i].name, suggestionSource: source, suggestionLink: '#', target: '' });
          }
        }
        this.setState({ suggestionList: suggestionList });
        //console.log(suggestionList);
      }.bind(this));
    }

    // case when user is logged in
    if (this.state.userName !== 'not logged in') {
      var source = 'Google';
      var suggestionList = [];
      var that = this;
      ajaxHandler.getPlacesFromGoogleMaps(location, function (suggestions) {
        for (var i = 0; i < suggestions.length; i++) {
          if (suggestions[i].photos !== undefined) {
            var link = suggestions[i].photos[0].html_attributions[0].match(/href="(.*?")/g);
              if (link) {
                link = link[0].slice(6).slice(0, -1);
                suggestionList.push({ suggestionName: suggestions[i].name, suggestionSource: source, suggestionLink: link, target: '_blank' });
              }
          } else {
            suggestionList.push({ suggestionName: suggestions[i].name, suggestionSource: source, suggestionLink: '#', target: '' });
          }
        }
        ajaxHandler.getSuggestionsForLoggedUsers(that.state.userName, location, function (suggestions) {
          if (suggestions.length > 0) {
            for (var i = 0; i < suggestions.length; i++) {
              suggestionList.unshift({ suggestionName: suggestions[i].suggestionName, suggestionSource: suggestions[i].friendName, suggestionLink: suggestions[i].photoLink, target: '_blank' });
            }
          }
          that.setState({ suggestionList: suggestionList });
        });
      });
    }
  }

  handleAddSuggestion(location, suggestionName, suggestionLink) {
    var userName = this.state.userName;
    ajaxHandler.postNewSuggestion(userName, location, suggestionName, suggestionLink, function (response) {
      console.log(response);
    });
  }

  handleFriendDelete(userID, friendID) {
    var friendList = this.state.friendList;
    var length = friendList.length;
    for (var i = 0; i < length; i++) {
      if (JSON.stringify(friendList[i].userID) === JSON.stringify(userID) && JSON.stringify(friendList[i].friendID) === JSON.stringify(friendID)) {
        friendList = friendList.slice(0, i).concat(friendList.slice(i + 1, length));
        break;
      }
    }
    ajaxHandler.deleteFriendship(userID, friendID, function () {
      this.setState({ friendList: friendList });
    }.bind(this));
  }

  render() {
    return (
      <div>
        <Nav userName={this.state.userName} />
        <div>
          <SearchInput handleSearchDest={this.handleSearchDest} />
          {this.state.suggestionList.length !== 0 && <SuggestionList suggestionList={this.state.suggestionList} weather={this.state.weather} />}
        </div>
        {this.state.userName !== 'not logged in' &&
          <div>
            <div className="form-wrapper">
              <DestinationInput handleInputDest={this.handleInputDest} />
              <AddSuggestion userName={this.state.userName} handleAddSuggestion={this.handleAddSuggestion} destinations={this.state.destinations} />
              <AddFriend userName={this.state.userName} friendsToAdd={this.state.friendsToAdd} handleAddFriend={this.handleAddFriend} />
            </div>
            <FriendList userName={this.state.userName} userID={this.state.userID} friendList={this.state.friendList} handleFriendDelete={this.handleFriendDelete} />
          </div>
        }
      </div>
    );
  }
}

export default App;