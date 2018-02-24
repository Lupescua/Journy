import React from 'react';

class FriendListEntry extends React.Component {
  constructor(props) {
    super(props);
    this.handleDelete = this.handleDelete.bind(this);
  }

  handleDelete(e) {
    this.props.handleFriendDelete(this.props.userID, this.props.friendID);
  }

  render() {
    return (
      <div className="friend-li">
        <span className="friends-name">{this.props.friend}</span>
        <a className="delete" onClick={this.handleDelete}>Delete</a>
      </div>
    );
  }
}

export default FriendListEntry;