import React from 'react'
import ReactDOM from 'react-dom'

import AppComponent from './App'

const lista = JSON.parse(localStorage.getItem('lista'))

ReactDOM.hydrate(
    <AppComponent lista={lista}/>,
    document.querySelector('#app')
)