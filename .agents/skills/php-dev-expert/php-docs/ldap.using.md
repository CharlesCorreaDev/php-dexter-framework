# Usando as chamadas LDAP do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.using.php

---

# Usando as chamadas LDAP do PHP

Antes de usar as chamadas LDAP deve-se saber...

- O nome ou endereço do servidor de diretório a ser usado
- O "dn base" do servidor (a parte do diretório
  que é mantida neste servidor, que poderia ser "o=Minha
  Empresa,c=BR")
- Se será necessária uma senha para acessar o servidor (muitos servidores
  irão fornecer acesso de leitura para uma "ligação anônima" mas irão requerer uma
  senha para as outras situações)

A sequência típica de chamadas LDAP em uma
aplicação segue este padrão:

```
  ldap_connect()    // estabelece conexão ao servidor
     |
  ldap_bind()       // ligação anônima ou autenticada
     |
  faz algo como pesquisar ou atualizar o diretório
  e mostrar os resultados
     |
  ldap_close()      // fecha a conexão
```

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
