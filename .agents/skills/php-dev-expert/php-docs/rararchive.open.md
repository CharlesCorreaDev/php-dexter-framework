# Abre arquivo RAR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.open.php

---

# RarArchive::open

# rar\_open

(PECL rar >= 2.0.0)

RarArchive::open -- rar\_open — Abre arquivo RAR

### Descrição

Estilo orientado a objetos (method):

public static function **RarArchive::open**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$password` = NULL, [callable](language.types.callable.md) `$volume_callback` = NULL): [RarArchive](class.rararchive.md)|[false](language.types.singleton.md)

Estilo procedural:

function **rar\_open**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$password` = NULL, [callable](language.types.callable.md) `$volume_callback` = NULL): [RarArchive](class.rararchive.md)|[false](language.types.singleton.md)

Abre o arquivo RAR especificado e retorna a instância [RarArchive](class.rararchive.md) que o representa.

> **Nota**:
>
> Se estiver abrindo um arquivo multivolume, o caminho do primeiro volume deverá ser passado como o primeiro parâmetro.
> Caso contrário, nem todos os arquivos serão mostrados. Isso ocorre intencionalmente.

### Parâmetros

`filename`
:   Caminho para o arquivo Rar.

`password`
:   Uma senha simples, se necessária para descriptografar os cabeçalhos. Ele também será usado por padrão
    se forem encontrados arquivos criptografados. Observe que os arquivos podem ter
    senhas diferentes em relação aos cabeçalhos e entre eles.

`volume_callback`
:   Uma função que recebe um parâmetro – o caminho do volume
    que não foi encontrado – e retorna uma string com o caminho correto
    para tal volume ou **`null`** se tal volume
    não existir ou não for conhecido. O programador deve garantir que
    a função passada não cause loops, pois esta função é chamada
    repetidamente se o caminho retornado em uma chamada anterior não
    corresponder ao volume necessário. A especificação deste parâmetro omite
    o aviso que seria emitido sempre que um volume não
    fosse encontrado; uma implementação que retorna apenas **`null`**
    pode, portanto, ser usado para simplesmente omitir tais avisos.

**Aviso**

Antes da versão 2.0.0, esta função não manipulava caminhos relativos
corretamente. Use [realpath()](function.realpath.md) como solução alternativa.

### Valor Retornado

Retorna a instância [RarArchive](class.rararchive.md) solicitada ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 3.0.0 | `volume_callback` foi adicionado. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$rar_arch = RarArchive::open('encrypted_headers.rar', 'samplepassword');
if ($rar_arch === FALSE)
    die("Falha ao abrir o arquivo");

$entries = $rar_arch->getEntries();
if ($entries === FALSE)
    die("Falha ao buscar as entradas");

echo "Encontrados " . count($entries) . " arquivos.\n";

if (empty($entries))
    die("Nenhuma entrada válida encontrada.");

$stream = reset($entries)->getStream();
if ($stream === FALSE)
    die("Falha ao abrir o primeiro arquivo");

$rar_arch->close();

echo "Conteúdo do primeiro arquivo é o seguinte:\n";
echo stream_get_contents($stream);

fclose($stream);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Encontrados 2 arquivos.
Conteúdo do primeiro arquivo é o seguinte:
Conteúdo do primeiro arquivo criptografado.
```

**Exemplo #2 Estilo procedural**

```
<?php
$rar_arch = rar_open('encrypted_headers.rar', 'samplepassword');
if ($rar_arch === FALSE)
    die("Falha ao abrir o arquivo");

$entries = rar_list($rar_arch);
if ($entries === FALSE)
    die("Falha ao buscar as entradas");

echo "Encontrados " . count($entries) . " files.\n";

if (empty($entries))
    die("Nenhuma entrada válida encontrada.");

$stream = reset($entries)->getStream();
if ($stream === FALSE)
    die("Falha ao abrir o primeiro arquivo");

rar_close($rar_arch);

echo "Conteúdo do primeiro arquivo é o seguinte:\n";
echo stream_get_contents($stream);

fclose($stream);
?>
```

**Exemplo #3 Retorno de chamada de volume**

```
<?php
/* Neste exemplo, há um volume chamado multi_broken.part1.rar
 * cujo próximo volume é denominado multi.part2.rar */
function resolve($vol) {
    if (preg_match('/_broken/', $vol))
        return str_replace('_broken', '', $vol);
    else
        return null;
}
$rar_file1 = rar_open(dirname(__FILE__).'/multi_broken.part1.rar', null, 'resolve');
$entry = $rar_file1->getEntry('file2.txt');
$entry->extract(null, dirname(__FILE__) . "/temp_file2.txt");
?>
```

### Veja também

- Empacotador [`rar://`](wrappers.rar.md)

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
