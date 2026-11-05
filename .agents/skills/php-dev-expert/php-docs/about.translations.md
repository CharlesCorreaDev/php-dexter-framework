# Traduções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.translations.php

---

## Traduções

O manual do PHP está disponível não apenas em vários formatos, mas
também em vários idiomas. O texto do
manual é escrito primeiro em inglês e então grupos de pessoas ao redor
do mundo fazem as traduções para suas línguas nativas.
Se a tradução para um capítulo ou para uma função específica ainda não foi
feita, o sistema de compilação do manual utiliza
a versão original em inglês.

Pessoas envolvidas na tradução iniciam com o código fonte XML
disponível em [» https://github.com/php/doc-en](https://github.com/php/doc-en)
e a partir daí é feita tradução para sua língua nativa. Eles
*não utilizam* as versões geradas (como
HTML ou texto plano) já que é o sistema de compilação do manual que
cuida das conversões de XML para formatos mais
legíveis.

> **Nota**:
>
> Para colaborar com a tradução da documentação
> entre em contato com time de tradução/documentação
> inscrevendo-se na lista de discussão do phpdoc: envie um e-mail vazio para [» phpdoc+subscribe@lists.php.net](mailto:phpdoc+subscribe@lists.php.net).
> O endereço da lista de discussão é `phpdoc@lists.php.net`. Informe na
> mensagem o interesse em traduzir o manual e alguém irá responder com
> orientações sobre como avançar iniciando uma tradução para uma nova língua ou
> entrando em contato com o time de documentação da língua desejada.

Atualmente o manual está disponível, parcialmente ou não, em mais de 10 idiomas.

Todos eles podem ser baixados aqui: [» https://www.php.net/docs.php](https://www.php.net/docs.php).

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
