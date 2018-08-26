import React, { Component, Fragment } from 'react';

// Estilo do componente
import './detalhe.css'
import HeaderComponent from "../../components/header";

class DetalhePagina extends Component {

    constructor(props){
        super(props);
        this.state = {
            noticia: {}
        }
    }

    async componentWillMount(){
        await fetch(`/api/noticias/${this.props.match.params.id}`).then(res => res.json()).then(noticia => {
            console.log(noticia)
            this.setState({
                noticia
            });
        }).catch(err => {
            console.log(err)
        });
    }

    render() {

        function texto(text){
            return {__html: text};
        }

        return (
          <Fragment>
              <HeaderComponent />
              <div className='samsung-blog-single'>
                  <div className='samsung-blog-item-single'>
                      <div className='samsung-blog-background' style={{
                          backgroundImage: `url(${this.state.noticia.imagem_destaque})`
                      }}></div>
                      <div className='samsung-blog-title'>
                          <h2>Título da notícia</h2>
                          <p>Autor - { this.state.noticia.autor }</p>
                          <p>{ this.state.noticia.data }</p>
                      </div>
                  </div>
                  <div className='container samsung-blog-content'>
                      <div className='col-md-12'>
                          <div dangerouslySetInnerHTML={texto(this.state.noticia.descricao)} />
                      </div>
                  </div>
              </div>
          </Fragment>
        );
    }
}

export default DetalhePagina;