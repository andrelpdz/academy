import { Injectable } from '@angular/core';
import { Livro } from './livro';

@Injectable({
  providedIn: 'root'
})
export class ControleLivrosService {
  private livros: Array<Livro> = [
    new Livro(1, 1, 'Use a Cabeça! Java', 'Um livro de programação com uma abordagem visual e divertida.', ['Kathy Sierra', 'Bert Bates']),
    new Livro(2, 2, 'Programação Web com Node.js', 'Guia completo para desenvolver aplicações web escaláveis com Node.js.', ['Fernando W. de Castro']),
    new Livro(3, 3, 'Estruturas de Dados e Algoritmos em Java', 'Abordagem clássica sobre as estruturas de dados fundamentais.', ['Robert Lafore'])
  ];

  constructor() {}

  obterLivros(): Array<Livro> {
    return this.livros;
  }

  incluir(livro: Livro): void {
    let novoCodigo = 0;
    if (this.livros.length > 0) {
      novoCodigo = Math.max(...this.livros.map(l => l.codigo));
    }
    livro.codigo = novoCodigo + 1;
    this.livros.push(livro);
  }

  excluir(codigo: number): void {
    const index = this.livros.findIndex(l => l.codigo === codigo);
    if (index !== -1) {
      this.livros.splice(index, 1);
    }
  }
}
