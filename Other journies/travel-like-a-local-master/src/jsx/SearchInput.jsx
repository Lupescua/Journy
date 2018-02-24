import React from 'react';

class SearchInput extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      inputSearchDest: ''
    }
    this.handleDestInputSearch = this.handleDestInputSearch.bind(this)
    this.handleSearchDestSubmit = this.handleSearchDestSubmit.bind(this)
  }

  handleDestInputSearch(e) {
    this.setState({
      inputSearchDest: e.target.value
    })
  }

  handleSearchDestSubmit(e) {
    e.preventDefault();
    this.props.handleSearchDest(this.state.inputSearchDest);
  }


  render() {
    return (
      <div>
        <form className="hero-form">
          <label>
            <h1>
              SKIP THE TOURIST TRAPS<br />
              ENJOY A CITY LIKE A LOCAL <br />
            </h1>
            <input className="hero-input" placeholder="Where would you like to travel?" type="text" value={this.state.inputSearchDest} onChange={this.handleDestInputSearch} />
          </label>
          <input type="submit" value="Submit" onClick={this.handleSearchDestSubmit} />
        </form>
      </div>
    );
  }

}

export default SearchInput;