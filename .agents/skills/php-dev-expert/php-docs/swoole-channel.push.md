# Escreve e envia dados para o canal Swoole

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-channel.push.php

---

# Swoole\Channel::push

(PECL swoole >= 1.9.0)

Swoole\Channel::push — Escreve e envia dados para o canal Swoole

### Descrição

public function **Swoole\Channel::push**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Os dados podem ser qualquer variável PHP não vazia. A variável será serializada se não for do tipo string.

Se o tamanho dos dados for superior a 8KB, o canal Swoole usará armazenamento em arquivos temporários.

A função retornará true se a operação de escrita for bem-sucedida, ou false se não houver espaço suficiente.

### Parâmetros

`data`
:   Os dados para enviar ao canal Swoole.

### Valor Retornado

Informa os dados foram enviados ao canal Swoole.

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
