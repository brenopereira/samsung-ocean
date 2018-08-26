import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route, HashRouter } from 'react-router-dom'

import PaginaHome from './pages/home';
import DetalhePagina from './pages/blog/detalhe';

// Terá que usar hash no navegador devido o rewrite do Laravel para não ter conflito
const Applicacao = () => {
  return (
    <BrowserRouter>
      <HashRouter>
        <div>
          <Route exact path='/' component={PaginaHome} />
          <Route exact path='/noticia/:id' component={DetalhePagina} />
        </div>
      </HashRouter>
    </BrowserRouter>
  );
};

ReactDOM.render(<Applicacao />, document.getElementById('root'));
