# Exemplo de classe registrada como empacotador de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.streamwrapper.example-1.php

---

## Exemplo de classe registrada como empacotador de fluxo

O exemplo abaixo implementa o manipulador de protocolo var:// que permite
acesso de leitura/escrita a uma variável global usando funções padrão de fluxo
de sistemas de arquivos como [fread()](function.fread.md). O protocolo var://
implementado abaixo, fornecido pela URL "var://foo" irá ler/escrever dados
de/para $GLOBALS["foo"].

**Exemplo #1 Um Fluxo para ler/escrever variáveis globais**

```
<?php

class FluxoDeVariavel {
    var $posicao;
    var $nomevar;

    function abre_fluxo($caminho, $modo, $opcoes, &$caminho_aberto)
    {
        $url = parse_url($caminho);
        $this->nomevar = $url["host"];
        $this->posicao = 0;

        return true;
    }

    function le_fluxo($contagem)
    {
        $ret = substr($GLOBALS[$this->nomevar], $this->posicao, $contagem);
        $this->posicao += strlen($ret);
        return $ret;
    }

    function escreve_fluxo($dados)
    {
        $esquerda = substr($GLOBALS[$this->nomevar], 0, $this->posicao);
        $direita = substr($GLOBALS[$this->nomevar], $this->posicao + strlen($dados));
        $GLOBALS[$this->nomevar] = $esquerda . $dados . $direita;
        $this->posicao += strlen($dados);
        return strlen($dados);
    }

    function posicao_fluxo()
    {
        return $this->posicao;
    }

    function final_fluxo()
    {
        return $this->posicao >= strlen($GLOBALS[$this->nomevar]);
    }

    function pesquisa_fluxo($deslocamento, $onde)
    {
        switch ($onde) {
            case SEEK_SET:
                if ($deslocamento < strlen($GLOBALS[$this->nomevar]) && $deslocamento >= 0) {
                     $this->posicao = $deslocamento;
                     return true;
                } else {
                     return false;
                }
                break;

            case SEEK_CUR:
                if ($deslocamento >= 0) {
                     $this->posicao += $deslocamento;
                     return true;
                } else {
                     return false;
                }
                break;

            case SEEK_END:
                if (strlen($GLOBALS[$this->nomevar]) + $deslocamento >= 0) {
                     $this->posicao = strlen($GLOBALS[$this->nomevar]) + $deslocamento;
                     return true;
                } else {
                     return false;
                }
                break;

            default:
                return false;
        }
    }

    function metadados_fluxo($caminho, $opcao, $var)
    {
        if($opcao == STREAM_META_TOUCH) {
            $url = parse_url($caminho);
            $nomevar = $url["host"];
            if(!isset($GLOBALS[$nomevar])) {
                $GLOBALS[$nomevar] = '';
            }
            return true;
        }
        return false;
    }
}

stream_wrapper_register("var", "FluxoDeVariavel")
    or die("Falha ao registrar protocolo");

$minhavar = "";

$fp = fopen("var://minhavar", "r+");

fwrite($fp, "linha1\n");
fwrite($fp, "linha2\n");
fwrite($fp, "linha3\n");

rewind($fp);
while (!feof($fp)) {
    echo fgets($fp);
}
fclose($fp);
var_dump($minhavar);

?>
```

O exemplo acima produzirá:

```
linha1
linha2
linha3
string(18) "linha1
linha2
linha3
"
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
