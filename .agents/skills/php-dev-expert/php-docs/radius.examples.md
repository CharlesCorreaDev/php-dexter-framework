# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/radius.examples.php

---

# Examples

Como começar?

- obtenha um recurso radius
- configure a biblioteca
- cria a requisição
- informe os atributos
- envie a requisição
- receba os atributos
- feche o recurso radius (opcional)

Dê uma olhada também nos exemplos neste pacote.

O pacote contém um script PHP de exemplo. Este script demonstra como
autenticar com o RADIUS usando PAP ou CHAP (md5). Se a autenticação for feita com
servidores Microsoft Radius, não será possível usar CHAP (md5). Se a intenção
for autenticar com servidores Microsoft, deverá ser usado
MS-CHAPv1 ou MS-CHAPv2, mas é mais complicado, pois será necessário md4,
sha1 e des para gerar os dados corretos. Os exemplos inclusos demonstram
todos os métodos de autenticação, incluindo MS-CHAPv1 e MS-CHAPv2. Para que o
MS-CHAP funcione, são necessárias as extensões [mcrypt](ref.mcrypt.md) e
[mhash](ref.mhash.md). A partir da
versão 1.2 do pacote, a extensão mcrypt não é mais necessária.

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
