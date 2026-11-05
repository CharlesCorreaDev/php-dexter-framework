# Cria uma nova imagem a partir de um arquivo GD ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromgd.php

---

# imagecreatefromgd

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imagecreatefromgd — Cria uma nova imagem a partir de um arquivo GD ou URL

### Descrição

function **imagecreatefromgd**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Cria uma nova imagem a partir de um arquivo GD ou URL.

**Dica**

Uma URL pode ser usada como um
nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
sobre as capacidades de cada empacotador, notas de uso
e informações sobre quaisquer variáveis predefinidas que eles possam
fornecer.

### Parâmetros

`filename`
:   Caminho para o arquivo GD.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [GDImage](class.gdimage.md); anteriormente, era retornado um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Exemplo de **imagecreatefromgd()****

```
<?php
// Carregar a imagem GD
$im = @imagecreatefromgd('./test.gd');

// Testa se a imagem foi carregada
if(!$im)
{
     die('Incapaz de carregar a imagem GD!');
}

// Realiza operações na imagem aqui

// Salva a imagem
imagegd($im, './test_updated.gd');
?>
```

### Notas

**Aviso**

Os formatos
de imagem GD e GD2 são formatos de imagem proprietários da biblioteca libgd. Eles devem ser considerados
*obsoletos* e só devem ser usados para propósitos de desenvolvimento
e testes.

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
