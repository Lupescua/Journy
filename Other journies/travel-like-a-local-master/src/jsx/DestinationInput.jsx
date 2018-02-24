import React from 'react';

class DestinationInput extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      inputDest: ""
    }
    this.handleDestInputChange = this.handleDestInputChange.bind(this)
    this.handleInputDestClick = this.handleInputDestClick.bind(this)
  }

  handleDestInputChange(e){
    this.setState({
      inputDest: e.target.value
    })
  }

  handleInputDestClick(e){
    e.preventDefault();
    this.props.handleInputDest(this.state.inputDest);
    this.setState({
      inputDest: ""
    });
  }


  render() {
    return(
      <div>
        <form>
          <label>
            <input placeholder="Add Your City to our Database!" type="text" value={this.state.inputDest} onChange={this.handleDestInputChange}/>
          </label>
          <input type="submit" value="Submit" onClick={this.handleInputDestClick} />
        </form>
      </div>
    );
  }
}

export default DestinationInput;