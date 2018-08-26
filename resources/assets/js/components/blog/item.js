import React, { Component } from 'react';
import { Link } from 'react-router-dom'

// Importa o estilo do componente item
import './item.css'

class ItemComponente extends Component {
  render() {
    function texto(text){
      return {__html: text};
    }

    return (
      <div className={ this.props.first ? 'col-lg-6 col-md-6 col-sm-6 samsung-blog-component' : 'col-lg-3 col-md-6 col-sm-6 samsung-blog-component'}>
        <Link to={'/noticia/' + this.props.noticia.slug }>
          <div className="samsung-blog-item">
              <div className='samsung-blog-background' style={{
                  backgroundImage: `url(${this.props.noticia.imagem_destaque})`
              }}></div>
              <div className='samsung-blog-description'>
                  <h3>{this.props.noticia.titulo}</h3>
                  <span>Autor: {this.props.noticia.autor}</span>
                  <p dangerouslySetInnerHTML={texto(this.props.noticia.descricao)} />
              </div>
          </div> 
        </Link>
      </div>
    );
  }
}

export default ItemComponente;