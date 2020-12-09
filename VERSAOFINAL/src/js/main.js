class App extends React.Component {
    render() {
      return (
        <div className="App">
          <Feed />
        </div>
      );
    }
  }
  
  class Feed extends React.Component {
    render() {
      return (
        <div className="feed">
          <div className="post">
            <span>This is my first post!</span>
          </div>
        </div>
      )
    }
  }
  
  ReactDOM.render(
    <App />,
    document.getElementById('root')
  );