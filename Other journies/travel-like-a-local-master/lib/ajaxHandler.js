var axios = require('axios');

exports.handleGetLoggedUserID = function(username, callback) {
  axios.post('http://127.0.0.1:3000/api/users/'+ username)
  .then(function(response){
    callback(response);
  });
};

exports.handlePostDestination = function(destination, callback) {
  axios.post('http://127.0.0.1:3000/api/destinations/'+ destination)
  .then(function(response){
    callback(response);
  });
};

exports.handleGetDestination = function(destination, callback) {
   axios.get('http://127.0.0.1:3000/api/destinations/'+ destination)
  .then(function(response){
    callback(response);
  });
}

exports.getRemainingFriends = function(userName, callback){
  axios.get('http://127.0.0.1:3000/api/remaining-friends/'+ userName)
  .then(function(response){
    callback(response);
  });
};

exports.getFriendList = function(userName, callback){
  axios.get('http://127.0.0.1:3000/api/friendlist/'+ userName)
  .then(function(response){
    callback(response);
  }).catch(function(err){
    console.log(err);
  });
};

exports.handleAddFriend = function(username, friend, callback) {
  axios.post('http://127.0.0.1:3000/api/addfriend', {username: username, friend:friend})
  .then(function(response){
    callback();
  });
}

exports.getPlacesFromGoogleMaps = function(location, callback) {
  axios.get('http://127.0.0.1:3000/api/googlemaps/'+location)
  .then(function(response){
    callback(response.data.json.results);
  }).catch(function(err){
    console.log(err);
  });
}


//get suggestions for the destination that was searched for from your friends
exports.getSuggestionsForLoggedUsers = function(userName, location, callback){
  axios.get('http://127.0.0.1:3000/api/suggestions/'+ location +'/' + userName)
  .then(function(response){
    callback(response.data);
  });
};

exports.postNewSuggestion = function(username, destination, suggestionName, suggestionLink, callback) {
  axios.post('http://127.0.0.1:3000/api/addsuggestion',
    {
      username: username,
      destination:destination,
      suggestionName:suggestionName,
      suggestionLink, suggestionLink
    })
  .then(function(response){
    callback(response);
  }).catch(function(err){
    console.log(err);
  });
};

exports.getDestinations = function(callback){
  axios.get('http://127.0.0.1:3000/api/destinations')
  .then(function(response){
    callback(response.data);
  });
};

exports.deleteFriendship = function(userID, friendID, callback) {
  axios.delete('http://127.0.0.1:3000/api/deletefriendship/'+userID+'/'+friendID)
  .then(function(response){
    callback();
  });
}

//get weather data
exports.getWeatherData = function (location, callback) {
  var loc = location;
  var searchtext = "select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text='" + loc + "') and u='c'"
    axios.get("https://query.yahooapis.com/v1/public/yql?q=" + searchtext + "&format=json")
    .then(function(response){
      callback(response);
  });
}
