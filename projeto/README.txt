README.txt

PROJETO: BITShop

TURMA: 2AII

ALUNOS:

* Luiz Flávio Rodrigues Silva
* Kaique Ribeiro Bispo
* Iury Otávio Verdeiro Montalvão

DISCIPLINA:
Programação de Sistemas para Web I

PROFESSOR:
Welison de Brito dos Santos Batista

TEMA DO PROJETO:
Loja virtual de tecnologia desenvolvida com PHP estruturado.

DESCRIÇÃO DO SISTEMA:
A BITShop é uma loja virtual fictícia voltada para a venda de produtos de tecnologia, como computadores, notebooks, periféricos, peças de hardware e acessórios.

O sistema foi desenvolvido com PHP estruturado, HTML, CSS, sessões e arquivos JSON, sem utilização de banco de dados. O objetivo do projeto é demonstrar, de forma prática, o funcionamento básico de uma loja online, incluindo cadastro de usuários, login, listagem de produtos, busca, filtro por categoria, carrinho de compras e finalização de pedido.

FUNCIONALIDADES PRINCIPAIS:

* Página inicial com produtos em destaque.
* Listagem de produtos cadastrados em arquivo JSON.
* Busca de produtos pelo nome.
* Filtro de produtos por categoria.
* Cadastro de usuários.
* Login e logout com uso de sessões.
* Painel do usuário logado.
* Carrinho de compras utilizando $_SESSION.
* Adição, remoção e exclusão de produtos do carrinho.
* Finalização de compra com simulação de pagamento via Pix.
* Página de confirmação de pedido.
* Uso de includes para reaproveitar cabeçalho e rodapé.
* Uso de funções próprias para formatar preços, proteger textos e carregar arquivos JSON.

TECNOLOGIAS UTILIZADAS:

* HTML5
* CSS3
* PHP estruturado
* Sessões PHP
* Arquivos JSON
* XAMPP / Servidor local Apache

ESTRUTURA PRINCIPAL DO PROJETO:
BITShop/
├── index.php
├── produtos.php
├── carrinho.php
├── login.php
├── cadastro.php
├── painel.php
├── finalizar_compra.php
├── pedido_confirmado.php
├── logout.php
├── sobre.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── funcoes.php
│   └── verificar_login.php
├── controlles/
│   ├── proc_login.php
│   ├── proc_cadastro.php
│   ├── proc_carrinho.php
│   └── atualizar_carrinho.php
├── data/
│   ├── produtos.json
│   └── usuarios.json
└── assets/
├── css/
│   ├── style.css
│   └── cadastro.css
└── img/

INSTRUÇÕES DE INSTALAÇÃO:

1. Instale o XAMPP no computador.
2. Copie a pasta do projeto BITShop para dentro da pasta htdocs do XAMPP.
3. Abra o painel do XAMPP.
4. Inicie o servidor Apache.
5. Abra o navegador.
6. Acesse o projeto pelo endereço:

http://localhost/BITShop/

Caso a pasta tenha outro nome, substitua "BITShop" pelo nome correto da pasta no navegador.

INSTRUÇÕES DE USO:

1. Acesse a página inicial do sistema.
2. Navegue pelos produtos disponíveis.
3. Cadastre uma nova conta.
4. Faça login com o usuário cadastrado.
5. Adicione produtos ao carrinho.
6. Altere a quantidade ou remova produtos, se necessário.
7. Finalize a compra.
8. Confirme o pedido na página de pagamento.

OBSERVAÇÕES:

* O sistema não utiliza banco de dados.
* Os dados dos produtos e usuários são armazenados em arquivos JSON.
* O carrinho é armazenado temporariamente na sessão do usuário.
* O projeto deve ser executado em servidor local, como XAMPP, WAMP ou similar.

OBJETIVO DO PROJETO:
Demonstrar a aplicação dos principais conceitos de PHP estruturado, incluindo sessões, formulários, manipulação de arquivos, organização modular com includes, funções próprias e construção de uma interface web funcional e coerente com a temática escolhida.

DECLARAÇÃO DE USO DE INTELIGÊNCIA ARTIFICIAL:

Durante o desenvolvimento deste projeto, foram utilizadas ferramentas de Inteligência Artificial Generativa como apoio ao processo de estudo, organização, revisão, comentários de código e melhoria da documentação.

O uso da IA ocorreu de forma auxiliar, sem substituir a autoria, a responsabilidade e a compreensão dos integrantes do grupo sobre o sistema desenvolvido.

A utilização foi feita seguindo princípios de transparência e responsabilidade, em conformidade com as diretrizes de integridade científica relacionadas ao uso de Inteligência Artificial Generativa, conforme previsto na Portaria CNPq nº 2.664, de 6 de março de 2026, que institui a Política de Integridade na Atividade Científica do CNPq.

Ferramenta utilizada:

* ChatGPT

Finalidade do uso:

* Apoio na explicação de códigos.
* Organização e revisão de arquivos PHP, HTML e CSS.
* Comentários explicativos no código.
* Apoio na elaboração do README.txt.
* Revisão dos requisitos do trabalho.

Responsabilidade:
Todo o conteúdo final do projeto foi revisado pelos integrantes do grupo, que permanecem responsáveis pelo funcionamento, apresentação e entrega do sistema.

