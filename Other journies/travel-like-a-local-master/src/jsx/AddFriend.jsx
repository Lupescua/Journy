import React from 'react';

class AddFriend extends React.Component {
  constructor(props) {
    super(props);
    this.handleAddFriendClick = this.handleAddFriendClick.bind(this);
    this.friendOptionChange = this.friendOptionChange.bind(this);
    this.state = { friendOption: '' };
  }

  handleAddFriendClick(e) {
    e.preventDefault();
    this.props.handleAddFriend(this.state.friendOption);
  }

  friendOptionChange(e) {
    this.setState({ friendOption: e.target.value });
  }

  componentWillReceiveProps(nextProps) {
    if (nextProps.friendsToAdd[0]) {
      this.setState({ friendOption: nextProps.friendsToAdd[0].username });
    }
  }

  render() {
    return (
      <div>
        <form>
          <label>
            <select onChange={this.friendOptionChange} value={this.state.friendOption}>
              {this.props.friendsToAdd.map((friend) => <option value={friend.username} key={friend.id}>{friend.username}</option>)}
            </select>
          </label>
          <input className="add-friend-btn" type="submit" value="Add Friend" onClick={this.handleAddFriendClick} />
        </form>
      </div>
    );
  }
}

export default AddFriend;