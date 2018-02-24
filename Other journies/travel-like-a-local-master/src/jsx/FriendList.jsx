import React from 'react';
import FriendListEntry from "./FriendListEntry.jsx";

class FriendList extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    //console.log(this.props.friendList);
    return (
      <div className="friend-list">
        <p><span className="name">{this.props.userName} </span>these are your friends:</p>
        {this.props.friendList.map((friend) => <FriendListEntry friendID={friend.friendID} userID={this.props.userID} friend={friend.friendName} key={friend.friendID} handleFriendDelete={this.props.handleFriendDelete} />)}
      </div>
    );
  }
}

export default FriendList;