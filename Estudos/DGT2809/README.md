Modo de Exibição Acessibilidade
Trabalho Prático | DGT2809
Aprofundamento em Desenvolvimento
Front-End

Material de orientações para desenvolvimento do trabalho
prático da disciplina DGT2809 Aprofundamento em
Desenvolvimento Front-End

Objetivos do trabalho prático

A partir dos objetivos listados abaixo, no final do projeto, você terá criado todos os
elementos necessários para exibição e entrada de dados no ambiente do Angular,
tornando-se capacitado para lidar com contextos reais de aplicação do framework:

Implementar serviços injetáveis para o Angular, na sintaxe Type Script
Implementar componentes, utilizando Type Script e modelos HTML
Utilizar a biblioteca para gerenciamento de formulários no Angular
Implementar a navegação interna do front-end com base em Angular
Materiais necessários para a prática

Computador com acesso à internet;
Editor de código Visual Studio Code;
Ambiente de desenvolvimento NodeJS;
Navegador de internet instalado no computador.
Desenvolvimento da prática

Vamos colocar a mão na massa?! Siga as instruções abaixo para desenvolvimento
desta missão.

👉 1º Procedimento | Projeto Angular para o Catálogo de Livros

Configure o projeto do tipo Angular, de acordo com as instruções seguintes
Executar o comando ng new livros-angular
Nas opções de criação, escolher Angular Routing como yes, e folhas de estilo
do tipo CSS comum
Entrar no diretório do projeto com cd livros-angular
Criar a classe Livro, através do comando ng g class Livro --skip-tests
Criar a classe Editora, através do comando ng g class Editora --skip-tests
Criar o controlador de editoras, como serviço do Angular, através do comando ng
g s ControleEditora --skip-tests
Criar o controlador de livros, como serviço do Angular, através do comando ng g
s ControleLivros --skip-tests
Criar o componente LivroLista, utilizando ng g c LivroLista --skip-tests
Criar o componente LivroDados, utilizando ng g c LivroDados --skip-tests
Codifique as entidades do sistema (Editora e Livro):
No arquivo editora.ts, implementar o código para a classe Editora, com os
campos codEditora, numérico, e nome, do tipo texto
No arquivo livro.ts, implementar o código para a classe Livro, composta dos
campos: codigo e codEditora, numéricos, título e resumo, ambos do tipo texto,
e autores, como um vetor de texto
Obs.: Pode ser utilizado o mesmo código das entidades Editora e Livro na prática do
nível 3 – "Meu Primeiro Framework".

Codifique o controlador de editoras, no arquivo controle-editora.service.ts:
Importar a classe Editora
Definir o atributo editoras, como Array<Editora>, contendo ao menos três
elementos no formato JSON, na classe ControleEditoraService, que já estará
configurada como serviço, devido à anotação Injectable
Adicionar os métodos getNomeEditora e getEditoras
Implementar o método getEditoras, com o retorno do vetor editoras
Implementar o método getNomeEditora, recebendo codEditora, do tipo
numérico, e retornando o nome da editora, através de uma operação filter sobre
o vetor editoras
Obs.: Pode ser adaptado o código de ControleEditora, implementado na prática do
nível 3 – "Meu Primeiro Framework".

Codifique o controlador de livros, no arquivo controle-livros.service.ts:
Importar a classe Livro
Definir o atributo livros, como Array<Livro>, contendo ao menos três elementos
no formato JSON, na classe ControleLivrosService, que estará configurada
como serviço, devido à anotação Injectable
Adicionar os métodos obterLivros, incluir e excluir
Implementar o método obterLivros, com o retorno do vetor livros
Implementar o método incluir, recebendo um objeto do tipo Livro, que terá o
código trocado pelo código mais alto do vetor, incrementado de um, e depois
será adicionado ao vetor
Implementar o método excluir, recebendo um código numérico, que irá
encontrar o índice do livro com o código fornecido, através de findIndex, e
removê-lo com o uso de splice
Obs.: Pode ser adaptado o código de ControleLivros, implementado na prática do nível
3 – "Meu Primeiro Framework".

Configure os serviços para injeção de dependência via construtor, adicionando
ControleEditoraService e ControleLivrosService ao vetor providers, na anotação
NgModule da classe AppModule, definida no arquivo app.module.ts;
Inclua as dependências do Bootstrap no arquivo index.html, encontrado no
diretório src do projeto livros-angular;
Implemente o código da classe LivroListaComponent, que é definida no arquivo
livro-lista.component.ts, de acordo com as instruções apresentadas a seguir:
Definir o atributo público editoras, do tipo Array<Editora>, inicializado com um
vetor vazio
Definir o atributo público livros, do tipo Array<Livro>, inicializado com um vetor
vazio
Injetar os serviços ControleEditoraService e ControleLivrosService, nos
atributos privados servEditora e servLivros, através do construtor
No método ngOnInit, implementação da interface OnInit, preencher o vetor
editoras, invocando o método getEditoras de servEditora, e o vetor livros, com
a chamada para o método obterLivros de servLivros
Acrescentar o método excluir, estilo Arrow Function, que deve receber o código
do livro, do tipo number, invocar o método excluir de servLivros, e preencher
novamente o vetor livros, com a chamada para o método obterLivros de
servLivros
Acrescentar o método obterNome, no estilo Arrow Function, que deve receber
codEditora, do tipo number, invocar o método getNomeEditora de servEditora,
e retornar o nome da editora
Implemente o template HTML do componente LivroListaComponent, definido no
arquivo livro-lista.component.html, de acordo com as instruções seguintes:
Definir a área principal (main), contendo o título da página e uma tabela para
exibição dos livros, formatando com as classes do Bootstrap
Utilizar a diretiva *ngFor, na forma de atributo, para efetuar a repetição do
trecho da linha de dados (tr) para cada livro do vetor livros
Definir os valores para as divisões, em tags td, utilizando os atributos do livro
corrente entre chaves duplas
Na divisão referente ao título, acrescentar um botão de exclusão, com a diretiva
(click) invocando o método excluir, com a passagem do atributo código do livro
corrente
Na divisão referente à editora, invocar o método obterNome, passando o
atributo codEditora do livro corrente, entre chaves duplas
Para os autores, apresentar os dados na forma de lista, a partir de uma tag ul, e
a repetição da tag li via diretiva *ngFor, definindo o valor para cada elemento li
com o nome do autor corrente entre chaves duplas
Altere o template de AppComponent, no arquivo app.component.html, usando
apenas o seletor app-livro-lista como conteúdo;
Execute com o comando ng serve, e acessar o endereço http://localhost:4200/
através de um navegador
Ajuste as características para obter uma página como o exemplo abaixo:
👉 2º Procedimento | Página de Cadastro e Sistema de Navegação

Abra o projeto livros-angular no ambiente do Visual Studio Code;
Configure a biblioteca padrão de formulários, adicionando FormsModule ao vetor
imports, presente na anotação NgModule da classe AppModule, definida no arquivo
app.module.ts;
Configure o roteamento, no arquivo app-routing.module.ts, acrescentando no
vetor routes as rotas "lista", apontando para LivroListaComponent, e "dados",
atribuída a LivroDadosComponent, além da rota padrão apontando para "lista";
Modifique o template de AppComponent no arquivo app.component.html de
acordo com as seguintes instruções:
Apagar o conteúdo atual do arquivo
Definir o menu de navegação, com tag nav, formatado pelo BootStrap, e utilizar
âncoras com diretiva routerLink, para acesso às rotas
Acrescentar um seletor router-outlet após o menu
Implemente o código da classe LivroDadosComponent, definida no arquivo livro-
dados.component.ts, de acordo com as instruções apresentadas a seguir:
Definir o atributo público livro, do tipo Livro, instanciado via construtor padrão
da classe Livro
Definir o atributo público autoresForm, do tipo texto, inicializado vazio
Definir o atributo público editoras, do tipo Array<Editora>, inicializado com um
vetor vazio
Injetar os serviços ControleEditoraService e ControleLivrosService, nos
atributos privados servEditora e servLivros, através do construtor
Injetar o roteador (Router) no atributo privado router, via construtor
No método ngOnInit, implementação da interface OnInit, preencher o vetor
editoras, invocando o método getEditoras de servEditora
Acrescentar o método incluir, estilo Arrow Function, que deve preencher o
atributo autores, do livro, com o valor de autoresForm separado pelas quebras
de linha, através do método split, invocar o método incluir de servLivros, com a
passagem do livro no parâmetro, e navegar para a rota "/lista", através do
método navigateByUrl do objeto router
Implemente o template HTML de LivroDadosComponent, definido no arquivo
livro-dados.component.html, de acordo com as instruções seguintes:
Definir a área principal (main), com o título da página e um formulário para
inclusão do livro, formatado através do Bootstrap
Associar a diretiva (submit), na tag form, ao método incluir, e adicionar o
atributo ngNativeValidate, para uso das restrições de campo do HTML 5
Adicionar um campo de entrada obrigatório, do tipo text, associado a livro.titulo
através da diretiva [(ngModel)]
Adicionar uma entrada do tipo textarea, associada a livro.resumo via diretiva
[(ngModel)]
Utilizar uma lista de seleção (combo) para as editoras, com as opções sendo
geradas via *ngFor, tendo como origem o vetor de nome editoras, e
relacionando codEditora ao valor da opção e nome para o texto
Relacionar a lista com livro.codEditora, através da diretiva [(ngModel)], e
tornar a seleção obrigatória
Adicionar uma entrada do tipo textarea, associada a autoresForm através da
diretiva [(ngModel)]
Adicionar um botão de submissão ao final
Execute com o comando ng serve, e acesse o endereço http://localhost:4200/
através de um navegador;
Teste a navegação do sistema, a partir do menu da parte superior;
Teste a inclusão de livros e as restrições definidas via HTML
Ajuste as características para obter uma página como o exemplo abaixo:
Resultados esperados da prática

É importante que o código seja organizado;
Explore as funcionalidades do Visual Studio Code para facilitar o desenvolvimento
da prática;
Nessa missão, é esperado que você demonstre habilidades básicas para:
    a. construção de serviços e componentes no Angular

    b. utilização do sistema de gerenciamento de formulários do Angular, bem como o
sistema de navegação interna

Entrega da prática

Siga as etapas abaixo para realizar a entrega deste trabalho

Armazene o seu projeto em um repositório no GITHUB;
Compartilhe o link com o seu tutor para correção da prática, por meio da Sala de
Aula Virtual, na aba "Trabalhos" do respectivo nível de conhecimento.
✍️ Ei, não se esqueça de entregar este trabalho na data estipulada no calendário
acadêmico!
