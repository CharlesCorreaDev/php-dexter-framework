# Modifica as permissões do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chmod.php

---

# chmod

(PHP 4, PHP 5, PHP 7, PHP 8)

chmod — Modifica as permissões do arquivo

### Descrição

function **chmod**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$permissions`): [bool](language.types.boolean.md)

Tenta mudar as permissões do arquivo especificado para o especificado em
`permissions`.

### Parâmetros

`filename`
:   O caminho para o arquivo.

`permissions`
:   Note que `permissions` não é automaticamente
    assumido como valor em octal, então para assegurar a operação esperada,
    é necessário prefixar `permissions` com um zero (0).
    Strings como "g+w" não irão funcionar adequadamente.

    ```
    <?php
    chmod ("/arquivo/diretorio", 755);   // decimal; provavelmente incorreto
    chmod ("/arquivo/diretorio", "u+rwx,go+rx"); // string; incorreto
    chmod ("/arquivo/diretorio", 0755);  // octal; representação correta do modo
    ?>
    ```

    O parâmetro `permissions` consiste de três componentes
    numéricos em octal especificando restrições de acesso para o proprietário,
    para o grupo de usuário onde está o proprietário e para todos os outros usuários,
    nesta ordem. Um componente pode ser calculado adicionando-se as permissões
    necessárias para o usuário alvo. O número 1 significa direito de
    execução, 2 significa direito de escrita,
    4 significa direito de leitura. Some
    esses números para especificar os direitos desejados. Pode-se consultar mais
    sobre modos em sistemas Unix com os comandos '**man 1 chmod**'
    e '**man 2 chmod**'.

    ```
    <?php
    // Escrita e leitura para o proprietário, nada mais para ninguém
    chmod ("/somedir/somefile", 0600);

    // Escrita e leitura para o proprietário, leitura para todos os outros
    chmod ("/somedir/somefile", 0644);

    // Tudo para o proprietário, leitura e execução para os outros
    chmod ("/somedir/somefile", 0755);

    // Tudo para o proprietário, leitura e execução para o grupo do prop
    chmod ("/somedir/somefile", 0750);
    ?>
    ```

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Em caso de falha, um aviso **`E_WARNING`** é emitido.

### Notas

> **Nota**:
>
> O usuário atual é aquele sob o qual o PHP é executado. Provavelmente não é
> o mesmo usuário que acessa linha de comando ou FTP. O modo pode ser modificado
> apenas pelo usuário proprietário do arquivo na maioria dos sistemas.

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

### Veja também

- [chown()](function.chown.md) - Modifica o proprietário do arquivo
- [chgrp()](function.chgrp.md) - Altera o grupo do arquivo
- [fileperms()](function.fileperms.md) - Obtém permissões de arquivo
- [stat()](function.stat.md) - Obtém informações sobre um arquivo

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
