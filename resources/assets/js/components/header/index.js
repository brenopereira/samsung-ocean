import React, { Component } from 'react';

// Style component
import './header.css';

class HeaderComponent extends Component {
  render() {
    return (
        <section className="samsung-header">
            <div className="container">
                <nav className="navbar">
                    <div className="navbar-header">
                        <a className="navbar-brand" href="/">
                            <img className="alumiar-logo-header" src="/logo.png" />
                        </a>
                    </div>
                    <div className="navbar-content js-navbar-collapse">
                        <ul className="nav navbar-nav navbar-left">
                            <li className="styled-list">
                                <a className="menu-link" href="/administrador/noticias">Administrar notícias</a>
                            </li>
                            <li className="styled-list">
                                <a className="menu-link" href="/administrador/noticias/adicionar">Cadastrar notícia</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        
    );
  }
}

export default HeaderComponent;