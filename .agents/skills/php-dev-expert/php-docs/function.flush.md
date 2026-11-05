# Descarrega o buffer na saída do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.flush.php

---

# flush

(PHP 4, PHP 5, PHP 7, PHP 8)

flush — Descarrega o buffer na saída do sistema

### Descrição

function **flush**(): [void](language.types.void.md)

Descarrega os buffers de escrita do PHP e do backend usado pelo pelo PHP
(ex.: CGI, um servidor web).
Em um ambiente de linha de comando, **flush()**
tentará descarregar somente o conteúdo do buffer
enquanto que em um contexto web, os cabeçalhos e o conteúdo do buffer são descarregados.

> **Nota**:
>
> **flush()** pode não ser capaz de passar por cima
> do esquema de buffer do servidor web
> e não tem efeito sobre nenhum sistema de buffer cliente-servidor no navegador.

> **Nota**:
>
> Esta função não tem nenhum efeito sobre manipuladores de saída de usuário
> como os inicializados por [ob\_start()](function.ob-start.md)
> ou [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md).

**Aviso**

**flush()** pode interferir com manipuladores de saída
que definem e enviam cabeçalhos em um contexto web (ex.: [ob\_gzhandler()](function.ob-gzhandler.md)),
enviando cabeçalhos antes que esses manipuladores possam fazê-lo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Descarregar cabeçalhos sem um corpo agora terá sucesso no FastCGI. |

### Veja também

- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_clean()](function.ob-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o

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
