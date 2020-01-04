// Компонент List Item.
class ListItem extends React.Component {
    render() {
        return <div className="list-item">List Item</div>
    }
}

// Компонент List.
class List extends React.Component {
    render() {
        return <div className="list">
            <ListItem />
            <ListItem />
            <ListItem />
            <ListItem />
        </div>
    }
}

// Компонент Header.
class Header extends React.Component {
    render() {
        return <div className="header">Header Title</div>
    }
}

// Компонент Wrapper, содержащий "вызовы" компонентов Header и List.
class Wrapper extends React.Component {
    render() {
        return <div className="wrapper">
            <Header />
            <List />
        </div>
    }
}

// Отображение компонента - Wrapper, описанного выше, на узле DOM с Id: root.
ReactDOM.render(
    <Wrapper />,
    document.getElementById('root')
)
