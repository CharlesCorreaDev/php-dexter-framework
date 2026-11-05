# Modos de operação do observador periódico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.periodic-modes.php

---

# Modos de operação do observador periódico

O observador [EvPeriodic](class.evperiodic.md)
funciona em diferentes modos dependendo dos
parâmetros
`offset`,
`interval`
e
`reschedule_cb`.

1. *Temporizador absoluto*.
   Neste modo
   `interval`
   =
   `0`,
   `reschedule_cb`
   = **`null`**. Este tempo simplesmente dispara no horário do relógio
   `offset`
   e não se repete. Ele não será ajustado quando ocorrer um salto no tempo, ou seja,
   se for executado em
   *1º de janeiro
   de 2014*
   então será executado quando a hora do sistema atingir ou ultrapassar esse horário.
2. *Temporizador de intervalo de repetição*.
   Neste modo
   `interval`
   >
   `0`,
   `reschedule_cb`
   = **`null`**; o inspetor sempre será programado para atingir o tempo limite no próximo
   `offset`
   +
   **`N`**
   \*
   `interval`
   tempo (para algum número inteiro
   **`N`**)
   e repita, independentemente de quaisquer saltos de tempo.

   Isso pode ser usado para criar temporizadores que não variam em relação à hora do
   sistema:

   ```
   <?php
   $hourly = EvPeriodic(0, 3600, NULL, function () {
     echo "uma vez por hora\n";
   });
   ?>
   ```

   Isso não significa que sempre haverá
   `3600`
   segundos entre os acionadores, mas apenas que a função de retorno
   de chamada será chamada
   quando a hora do sistema mostrar uma hora completa
   (*UTC*).

   [EvPeriodic](class.evperiodic.md)
   tentará executar o retorno de chamada neste modo no
   próximo horário possível, onde
   time
   =
   `offset`
   (`mod`
   `interval`),
   independentemente de quaisquer saltos de tempo.
3. *Modo de reprogramação manual*.
   Neste modo,
   `reschedule_cb`
   é um
   [callable](language.types.callable.md).

   `interval`
   e
   `offset`
   estão sendo ignorados. Em vez disso, cada vez que o inspetor periódico for
   agendado, o retorno de chamada de reprogramação (
   `reschedule_cb`)
   será chamado com o inspetor como primeiro e a hora atual como segundo
   argumento.

   Este retorno de chamada
   *não deve*
   parar ou destruir este ou qualquer outro observador periódico, e
   *não deve*
   chamar quaisquer funções ou métodos de laço de eventos. Para pará-lo, retorne
   `1e30`
   e pare depois. Um
   observador [EvPrepare](class.evprepare.md)
   pode ser usado para esta tarefa.

   Ele deve retornar o próximo tempo de disparo, com base no valor de tempo passado
   (ou seja, o menor valor de tempo maior ou igual ao segundo
   argumento). Geralmente será chamado logo antes do retorno de chamada ser
   acionado, mas também poderá ser chamado em outros momentos.

   **Exemplo #1 Usando retorno de chamada de reagendamento**

   ```
   <?php
   // Marcação a cada 10,5 segundos

   function reschedule_cb ($watcher, $now) {
      return $now + (10.5. - fmod($now, 10.5));
   }

   $w = new EvPeriodic(0., 0., "reschedule_cb", function ($w, $revents) {
      echo time(), PHP_EOL;
   });

   Ev::run();
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
