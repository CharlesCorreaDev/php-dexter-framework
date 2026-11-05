# Relações — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/relations.html

---

# Relações[¶](#relations-1 "Link permanente para este título")

O phpMyAdmin permite relacionamentos (semelhantes às chaves estrangeiras) usando métodos MySQL-nativos (InnoDB) quando disponíveis e passando para recursos especiais do phpMyAdmin somente quando necessário. Existem duas maneiras de editar essas relações, com a *vizualização de relação* e o *designer* de arrastar-e-soltar - ambos explicados nesta página.

Nota

Você precisa configurar o [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) para usar as relações exclusivas do phpMyAdmin.

## Informações técnicas[¶](#technical-info "Link permanente para este título")

Atualmente, o único tipo de tabela MySQL que suporta relacionamentos nativamente é InnoDB. Ao usar uma tabela InnoDB, o phpMyAdmin criará relações reais do InnoDB que serão impostas pelo MySQL, independentemente do aplicativo que acessa o banco de dados. No caso de qualquer outro tipo de tabela, o phpMyAdmin impõe as relações internamente e essas relações não são aplicadas a nenhuma outra aplicação.

## Visão de relação(ões)[¶](#relation-view "Link permanente para este título")

Para fazê-lo funcionar, primeiro você deve criar o [[pmadb|pmadb]] corretamente. Uma vez que esteja configurado, selecione a página “Estrutura” de uma tabela. Abaixo da definição da tabela é mostrado um link chamado “Visualização de Relação”. Ao clicar nesse link, será mostrada uma página que lhe permite criar um link para outra tabela para quaisquer campos (a maioria). Somente as CHAVES PRIMÁRIAS são mostradas lá, então se o campo que você está se referindo não for mostrado, provavelmente você está fazendo algo errado. O menu suspenso na parte inferior é o campo que será usado como nome para um registro.

### Exemplo de visualização de relações[¶](#relation-view-example "Link permanente para este título")

![_images/pma-relations-relation-view-link.png](_images/pma-relations-relation-view-link.png)
![_images/pma-relations-relation-link.png](_images/pma-relations-relation-link.png)

Digamos que você tenha categorias e links e uma categoria pode conter vários links. Sua estrutura de tabela seria algo assim:

- category.category\_id (deve ser único)
- category.name
- link.link\_id
- link.category\_id
- link.uri.

Abra a página de visualização de relação (abaixo da estrutura da tabela) para a tabela link e para o campo category\_id, você seleciona category.category\_id como registro mestre.

Se você procurar agora a tabela link, o campo category\_id será um hiperlink clicável para o registro apropriado da categoria. Mas tudo que você vê é apenas o category\_id, e não o nome da categoria.

![_images/pma-relations-relation-name.png](_images/pma-relations-relation-name.png)

Para corrigir isso, abra a visualização de relação da tabela category e no menu suspenso na parte inferior, selecione “nome”. Agora se você procurar a tabela link novamente e passar o mouse sobre o hiperlink category\_id, o valor da categoria relacionada será mostrado como dica.

![_images/pma-relations-links.png](_images/pma-relations-links.png)

## Designer[¶](#designer "Link permanente para este título")

O recurso do Designer é uma maneira gráfica de criar, editar e exibir as relações do phpMyAdmin. Essas relações são compatíveis com as criadas na visão de relação do phpMyAdmin.

Para usar esse recurso, você precisa de um [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) configurado corretamente e deve ter o [`$cfg['Servers'][$i]['table_coords']`](config.md#cfg_Servers_table_coords) configurado.

Para usar o designer, selecione a página de estrutura de um banco de dados e procure a aba Designer.

Para exportar a visão para PDF, você deve criar as páginas PDF primeiro. O Designer cria o layout, como as tabelas devem ser exibidas. Para enfim exportar a visão, você deve criar isso com uma página PDF e selecionar seu layout, que você criou com o designer.

Ver também

[6.8 Como eu posso produzir um esquema PDF do meu banco de dados?](faq.md#faqpdf)
