import React, { Component, Fragment } from 'react';

// Components
import ItemComponente from './../../components/blog/item'

// Component template
import HeaderComponent from './../../components/header'

// Style component
import './home.css';

class PaginaHome extends Component {
  constructor(props){
    super(props);
    this.state = {
      noticias: []
    }
  }

  async componentWillMount(){
    await fetch('/api/noticias').then(res => res.json()).then(noticias => {
      this.setState({
        noticias
      });
    }).catch();
  };

  render() {
    return (
        <Fragment>
            <HeaderComponent />
            <div className='samsung-feature'>
                <div className="samsung-feature-background"></div>
                <div className="samsung-feature-content">
                    <h3>ComicsNews</h3>
                    <p>Listagem de todas as notícias do blog</p>
                </div>
            </div>
            <div className='container'>
                <div className='row'>
                    {this.state.noticias.length >= 1 ? this.state.noticias.map(function(noticia, index){
                        return <ItemComponente first={index === 0 ? true : false} key={index} noticia={noticia} />
                        }) : <div className='samsung-information'>
                            <h3>Não foi encontrada nenhuma notícia até o momento.</h3>
                        </div>
                    }
                </div>
            </div>
        </Fragment>
    );
  }
}

export default PaginaHome;