# Define uma função de retorno a ser chamada durante o processamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setprogressmonitor.php

---

# Imagick::setProgressMonitor

(PECL imagick 3 >= 3.3.0)

Imagick::setProgressMonitor — Define uma função de retorno a ser chamada durante o processamento

### Descrição

public function **Imagick::setProgressMonitor**([callable](language.types.callable.md) `$callback`): [bool](language.types.boolean.md)

Define uma função de retorno a ser chamada durante o processamento da imagem Imagick.

### Parâmetros

`callback`
:   A função de progresso a ser chamada. Deve retornar true se o processamento da imagem continuar ou false se for cancelado. O parâmetro 'offset' indica o progresso e o parâmetro 'span' indica a quantidade total de trabalho necessário a ser feito.

    function 
    callback
    (
    [mixed](language.types.mixed.md) `$offset`
    , 
    [mixed](language.types.mixed.md) `$span`
    ): [bool](language.types.boolean.md)

    **Cuidado**

    Os valores passados ​​para a função de retorno não são consistentes. Em particular, o parâmetro 'span' pode aumentar durante o processamento da imagem. Por causa disso, calcular a porcentagem concluída de uma operação de imagem não é trivial.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::setProgressMonitor()****

```
<?php
    $abortReason = null;

    try {
        $imagick = new \Imagick(realpath($this->control->getImagePath()));
        $startTime = time();

        $callback = function ($offset, $span)  use ($startTime, &$abortReason) {
            if (((100 * $offset) / $span)  > 20) {
                $abortReason = "Processamento alcançou 20%";
                return false;
            }

            $nowTime = time();

            if ($nowTime - $startTime > 5) {
                $abortReason = "Processamento de imagem levou mais de 5 segundos";
                return false;
            }
            if (($offset % 5) == 0) {
                echo "Progresso: $offset / $span <br/>";
            }
            return true;
        };

        $imagick->setProgressMonitor($callback);

        $imagick->waveImage(2, 15);

        echo "Comprimento dos dados é: ".strlen($imagick->getImageBlob());
    }
    catch(\ImagickException $e) {
        if ($abortReason != null) {
            echo "Processamento de imagem foi abortado: ".$abortReason."<br/>";
        }
        else {
            echo "ImagickException capturada: ".$e->getMessage()." Tipo da exceção é ".get_class($e);
        }
    }

?>
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
