# jQuery-Datatable-Utilizando-o-plugin-em-PHP-MySQL
DataTables é um poderoso plugin jQuery para criar listagens de tabelas e adicionar interações a elas, dessa forma, sendo essencial para a organização de dados tabulados, ou seja, os dados que geralmente você mostra em forma de tabelas. É um componente com inúmeras funcionalidades a oferecer para o desenvolvedor.  Desde de importação dos dados em formato csv e até gerando PDF.

Criei um simples exemplo de como utilizar o plugin, criei um banco com as informações dos personagens de Game Of Thrones, 
onde a tabela mostra os personagens que estão vivos e morto, junto com o tempo de tela de cada um (Se você não assistiu a série
todo não recomendo ver esse exemplo, risco de spoiler haha). Fiz uma simples conexão em PHP com algumas querys direto no banco para mostrar os personagens e também vamos criar uma nova página chamada “main.js” e inserir o código jQuery necessário para a inicialização do Datatable. Definimos um seletor “#got”, ou seja, o Datatable será configurado automaticamente em qualquer elemento que tenha um ID "#got".

Enfim, vamos resumir a funcionalidades demonstradas: 

 - bJQueryUI: 
 Identifica que o plugin deve utilizar o tema padrão do seu jQuery, ou seja, o seu jQuery UI configurado.

 - sPaginationType: 
 Identifica que devem ser mostrados os números de paginação.

- oTableTools:
Esta opção é mais um “plugin do plugin”, foi uma funcionalidade extra instalada juntamente com o Datatable para acrescentar mais funcionalidades. O oTableTools neste caso adiciona botões de extração para PDF e Excel, ou seja, o usuário poderá a qualquer hora extrair todo o conteúdo da tela.

E entre outras...

Caso você queira ver o site, ler o manual e aprender com os mais variados exemplos, 
apenas acesse esse site oficial do plugin: https://datatables.net
