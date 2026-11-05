# Move um arquivo enviado para uma nova localização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.move-uploaded-file.php

---

# move\_uploaded\_file

(PHP 4 >= 4.0.3, PHP 5, PHP 7, PHP 8)

move\_uploaded\_file — Move um arquivo enviado para uma nova localização

### Descrição

function **move\_uploaded\_file**([string](language.types.string.md) `$from`, [string](language.types.string.md) `$to`): [bool](language.types.boolean.md)

Esta função faz uma verificação para garantir que o arquivo designado
por `from` é um arquivo de envio válido
(que tenha sido enviado pelo mecanismo de envio POST HTTP do PHP).
Se o arquivo for válido, ele será movido para o nome de arquivo dado
por `to`.

Este tipo de verificação é especialmente imporante se existir alguma
chance de que qualquer coisa feita com os arquivos enviados possa revelar
seus conteúdos ao usuário, ou mesmo para outros usuários no mesmo
sistema.

### Parâmetros

`from`
:   O nome do arquivo enviado.

`to`
:   O destino do arquivo movido.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

Se `from` não for um arquivo enviado válido,
nenhuma ação ocorrerá e
**move\_uploaded\_file()** retornará
**`false`**.

Se `from` for um arquivo enviado válido, mas
não puder ser movido por alguma razão, nenhuma ação ocorrerá e
**move\_uploaded\_file()** retornará
**`false`**. Adicionalmente, um alerta será emitido.

### Examples

**Exemplo #1 Enviando múltiplos arquivos**

```
<?php
$uploads_dir = '/uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() pode evitar ataques no sistema de arquivos;
        // valização e sanitização adicionais no nome do arquivo podem ser necessárias
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
?>
```

### Notas

> **Nota**:
>
> **move\_uploaded\_file()** é afetada por
> [open\_basedir](ini.core.md#ini.open-basedir).
> Entretanto, restrições são aplicadas apenas no caminho de
> `to` para permitir a movimentação
> de arquivos enviados nos quais `from` possa conflitar
> com tais restrições. **move\_uploaded\_file()** assegura
> a segurança desta operação permitindo que apenas arquivos enviados
> através do PHP possam ser movidos.

**Aviso**

Se o arquivo de destino já existir, ele será sobrescrito.

### Veja também

- [is\_uploaded\_file()](function.is-uploaded-file.md) - Informa se o arquivo foi enviado por POST HTTP
- [rename()](function.rename.md) - Renomeia um arquivo ou diretório
- Consulteja [Gerenciando envio de arquivos](features.file-upload.md) para um exemplo de uso básico

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
