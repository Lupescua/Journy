import React from 'react';
import ReactDOM from 'react-dom';
import SuggestionListEntry from "./SuggestionListEntry.jsx";


class SuggestionList extends React.Component {
  constructor(props) {
    super(props);
  }


  render() {
    //console.log(this.props);
    return (
      <div className="suggestion-list media">

        {this.props.weather && <div className="forecast">Current Weather <br /><br /> {this.props.weather}</div>}

        <ol>
          {
            this.props.suggestionList.map((suggestion) =>
              <SuggestionListEntry
                suggestion={suggestion}
                key={suggestion.suggestionName}
                />
            )
          }
        </ol>
      </div>
    )
  }
}

export default SuggestionList;
