import React from 'react';
import ReactDOM from 'react-dom';

class SuggestionListEntry extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <li className="suggestion-list-entry">
        <div className="suggestion-list-entry-title">
          <a href={this.props.suggestion.suggestionLink} target={this.props.suggestion.target}>{this.props.suggestion.suggestionName}</a> FROM {this.props.suggestion.suggestionSource}
        </div>
      </li>
    );
  }
}

export default SuggestionListEntry;
