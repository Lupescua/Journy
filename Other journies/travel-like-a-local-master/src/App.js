var React = require('react');
var ReactDOM = require('react-dom');
var App = require('./jsx/App.jsx').default;

// username coming from express user session
ReactDOM.render(<App username={username}/>, document.getElementById('app'));