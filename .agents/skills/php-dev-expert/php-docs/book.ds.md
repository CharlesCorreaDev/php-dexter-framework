# Estruturas de Dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.ds.php

---

# Estruturas de Dados

# Introdução

Estruturas de dados eficientes para o PHP 7, fornecidas como alternativa ao [array](language.types.array.md).

Consulte [» este post no blog](https://medium.com/p/9dda7af674cd)
para benchmarks, discussões e perguntas frequentes.

- [Instalação/Configuração](ds.setup.md)
  - [Dependências](ds.requirements.md)
  - [Instalação](ds.installation.md)
- [Examples](ds.examples.md)
- [Ds\Collection](class.ds-collection.md) — A interface Collection
  - [Ds\Collection::clear](ds-collection.clear.md) — Remove todos os valores
  - [Ds\Collection::copy](ds-collection.copy.md) — Retorna uma cópia rasa da coleção
  - [Ds\Collection::isEmpty](ds-collection.isempty.md) — Retorna se a coleção está vazia
  - [Ds\Collection::toArray](ds-collection.toarray.md) — Converte a coleção para um array
- [Ds\Hashable](class.ds-hashable.md) — A interface Hashable
  - [Ds\Hashable::equals](ds-hashable.equals.md) — Determina se um objeto é igual à instância atual
  - [Ds\Hashable::hash](ds-hashable.hash.md) — Retorna um valor escalar a ser usado como valor de hash
- [Ds\Sequence](class.ds-sequence.md) — A Interface Sequence
  - [Ds\Sequence::allocate](ds-sequence.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\Sequence::apply](ds-sequence.apply.md) — Atualiza todos os valores aplicando uma função callback a cada valor
  - [Ds\Sequence::capacity](ds-sequence.capacity.md) — Retorna a capacidade atual
  - [Ds\Sequence::contains](ds-sequence.contains.md) — Determina se a sequência contém determinados valores
  - [Ds\Sequence::filter](ds-sequence.filter.md) — Cria uma nova sequência usando um callable para
    determinar quais valores incluir.
  - [Ds\Sequence::find](ds-sequence.find.md) — Tenta encontrar o índice de um valor
  - [Ds\Sequence::first](ds-sequence.first.md) — Retorna o primeiro valor na sequência
  - [Ds\Sequence::get](ds-sequence.get.md) — Retorna o valor em um índice específico
  - [Ds\Sequence::insert](ds-sequence.insert.md) — Insere valores em um índice específico
  - [Ds\Sequence::join](ds-sequence.join.md) — Une todos os valores como uma string
  - [Ds\Sequence::last](ds-sequence.last.md) — Retorna o último valor
  - [Ds\Sequence::map](ds-sequence.map.md) — Retorna o resultado da aplicação de um callback a cada valor
  - [Ds\Sequence::merge](ds-sequence.merge.md) — Retorna o resultado de adicionar todos os valores fornecidos à sequência
  - [Ds\Sequence::pop](ds-sequence.pop.md) — Remove e retorna o último valor
  - [Ds\Sequence::push](ds-sequence.push.md) — Adiciona valores ao final da sequência
  - [Ds\Sequence::reduce](ds-sequence.reduce.md) — Reduz a sequência a um único valor usando uma função de callback
  - [Ds\Sequence::remove](ds-sequence.remove.md) — Remove e retorna um valor pelo índice
  - [Ds\Sequence::reverse](ds-sequence.reverse.md) — Inverte a sequência no local
  - [Ds\Sequence::reversed](ds-sequence.reversed.md) — Retorna uma cópia reversa
  - [Ds\Sequence::rotate](ds-sequence.rotate.md) — Rotaciona a sequência pelo número dado de rotações
  - [Ds\Sequence::set](ds-sequence.set.md) — Atualiza um valor em um índice específico
  - [Ds\Sequence::shift](ds-sequence.shift.md) — Remove e retorna o primeiro valor
  - [Ds\Sequence::slice](ds-sequence.slice.md) — Retorna uma sub-sequência de um intervalo dado
  - [Ds\Sequence::sort](ds-sequence.sort.md) — Ordena a sequência no local
  - [Ds\Sequence::sorted](ds-sequence.sorted.md) — Retorna uma cópia ordenada
  - [Ds\Sequence::sum](ds-sequence.sum.md) — Retorna a soma de todos os valores na sequência
  - [Ds\Sequence::unshift](ds-sequence.unshift.md) — Adiciona valores no início da sequência
- [Ds\Vector](class.ds-vector.md) — A classe Vector
  - [Ds\Vector::allocate](ds-vector.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\Vector::apply](ds-vector.apply.md) — Atualiza todos os valores aplicando uma função de callback a cada valor
  - [Ds\Vector::capacity](ds-vector.capacity.md) — Retorna a capacidade atual
  - [Ds\Vector::clear](ds-vector.clear.md) — Remove todos os valores
  - [Ds\Vector::\_\_construct](ds-vector.construct.md) — Cria uma nova instância
  - [Ds\Vector::contains](ds-vector.contains.md) — Determina se o vetor contém os valores fornecidos
  - [Ds\Vector::copy](ds-vector.copy.md) — Retorna uma cópia rasa do vetor
  - [Ds\Vector::count](ds-vector.count.md) — Retorna o número de valores na coleção
  - [Ds\Vector::filter](ds-vector.filter.md) — Cria um novo vetor usando um callable para
    determinar quais valores incluir.
  - [Ds\Vector::find](ds-vector.find.md) — Tenta encontrar o índice de um valor
  - [Ds\Vector::first](ds-vector.first.md) — Retorna o primeiro valor no vetor
  - [Ds\Vector::get](ds-vector.get.md) — Retorna o valor em um índice específico
  - [Ds\Vector::insert](ds-vector.insert.md) — Insere valores em um índice específico
  - [Ds\Vector::isEmpty](ds-vector.isempty.md) — Retorna se o vetor está vazio
  - [Ds\Vector::join](ds-vector.join.md) — Junta todos os valores como uma string
  - [Ds\Vector::jsonSerialize](ds-vector.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Vector::last](ds-vector.last.md) — Retorna o último valor
  - [Ds\Vector::map](ds-vector.map.md) — Retorna o resultado da aplicação de uma função de callback a cada valor
  - [Ds\Vector::merge](ds-vector.merge.md) — Retorna o resultado da adição de todos os valores fornecidos ao vetor
  - [Ds\Vector::pop](ds-vector.pop.md) — Remove e retorna o último valor
  - [Ds\Vector::push](ds-vector.push.md) — Adiciona valores ao final do vetor
  - [Ds\Vector::reduce](ds-vector.reduce.md) — Reduz o vetor a um único valor usando uma função de callback
  - [Ds\Vector::remove](ds-vector.remove.md) — Remove e retorna um valor pelo índice
  - [Ds\Vector::reverse](ds-vector.reverse.md) — Inverte o vetor no local
  - [Ds\Vector::reversed](ds-vector.reversed.md) — Retorna uma cópia invertida
  - [Ds\Vector::rotate](ds-vector.rotate.md) — Rotaciona o vetor por um número dado de rotações
  - [Ds\Vector::set](ds-vector.set.md) — tualiza um valor em um índice específico
  - [Ds\Vector::shift](ds-vector.shift.md) — Remove e retorna o primeiro valor
  - [Ds\Vector::slice](ds-vector.slice.md) — Retorna um sub-vetor de um determinado intervalo
  - [Ds\Vector::sort](ds-vector.sort.md) — Ordena o vetor no local
  - [Ds\Vector::sorted](ds-vector.sorted.md) — Retorna uma cópia ordenada
  - [Ds\Vector::sum](ds-vector.sum.md) — Retorna a soma de todos os valores no vetor
  - [Ds\Vector::toArray](ds-vector.toarray.md) — Converte o vetor em um array
  - [Ds\Vector::unshift](ds-vector.unshift.md) — Adiciona valores no início do vetor
- [Ds\Deque](class.ds-deque.md) — A classe Deque
  - [Ds\Deque::allocate](ds-deque.allocate.md) — Alloca memória suficiente para uma capacidade necessária
  - [Ds\Deque::apply](ds-deque.apply.md) — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor
  - [Ds\Deque::capacity](ds-deque.capacity.md) — Retorna a capacidade atual
  - [Ds\Deque::clear](ds-deque.clear.md) — Remove todos os valores do deque
  - [Ds\Deque::\_\_construct](ds-deque.construct.md) — Cria uma nova instância
  - [Ds\Deque::contains](ds-deque.contains.md) — Determina se a deque contém os valores fornecidos
  - [Ds\Deque::copy](ds-deque.copy.md) — Retorna uma cópia rasa da deque
  - [Ds\Deque::count](ds-deque.count.md) — Retorna o número de valores na coleção
  - [Ds\Deque::filter](ds-deque.filter.md) — Cria um novo deque usando um callable para
    determinar quais valores incluir
  - [Ds\Deque::find](ds-deque.find.md) — Tenta encontrar o índice de um valor
  - [Ds\Deque::first](ds-deque.first.md) — Retorna o primeiro valor na deque
  - [Ds\Deque::get](ds-deque.get.md) — Retorna o valor em um índice específico
  - [Ds\Deque::insert](ds-deque.insert.md) — Insere valores em um índice específico
  - [Ds\Deque::isEmpty](ds-deque.isempty.md) — Retorna se o deque está vazio
  - [Ds\Deque::join](ds-deque.join.md) — Une todos os valores como uma string
  - [Ds\Deque::jsonSerialize](ds-deque.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Deque::last](ds-deque.last.md) — Retorna o último valor
  - [Ds\Deque::map](ds-deque.map.md) — Retorna o resultado de aplicar uma função de retorno de chamada a cada valor
  - [Ds\Deque::merge](ds-deque.merge.md) — Retorna o resultado de adicionar todos os valores dados à deque
  - [Ds\Deque::pop](ds-deque.pop.md) — Remove e retorna o último valor
  - [Ds\Deque::push](ds-deque.push.md) — Adiciona valores ao final do deque
  - [Ds\Deque::reduce](ds-deque.reduce.md) — Reduz o deque a um único valor usando uma função de retorno de chamada
  - [Ds\Deque::remove](ds-deque.remove.md) — Remove e retorna um valor pelo índice
  - [Ds\Deque::reverse](ds-deque.reverse.md) — Inverte a deque no local
  - [Ds\Deque::reversed](ds-deque.reversed.md) — Retorna uma cópia invertida
  - [Ds\Deque::rotate](ds-deque.rotate.md) — Rotaciona a deque por um número dado de rotações
  - [Ds\Deque::set](ds-deque.set.md) — Atualiza um valor em um índice específico
  - [Ds\Deque::shift](ds-deque.shift.md) — Remove e retorna o primeiro valor
  - [Ds\Deque::slice](ds-deque.slice.md) — Retorna uma sub-deque de um determinado intervalo
  - [Ds\Deque::sort](ds-deque.sort.md) — Ordena a deque no local
  - [Ds\Deque::sorted](ds-deque.sorted.md) — Retorna uma cópia ordenada
  - [Ds\Deque::sum](ds-deque.sum.md) — Retorna a soma de todos os valores na deque
  - [Ds\Deque::toArray](ds-deque.toarray.md) — Converte a deque para um array.
  - [Ds\Deque::unshift](ds-deque.unshift.md) — Adiciona valores no início da deque
- [Ds\Map](class.ds-map.md) — A classe Map
  - [Ds\Map::allocate](ds-map.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\Map::apply](ds-map.apply.md) — Atualiza todos os valores aplicando uma função de retorno de chamada a cada valor
  - [Ds\Map::capacity](ds-map.capacity.md) — Retorna a capacidade atual
  - [Ds\Map::clear](ds-map.clear.md) — Remove todos os valores
  - [Ds\Map::\_\_construct](ds-map.construct.md) — Cria uma nova instância
  - [Ds\Map::copy](ds-map.copy.md) — Retorna uma cópia rasa do mapa
  - [Ds\Map::count](ds-map.count.md) — Retorna o número de valores no mapa
  - [Ds\Map::diff](ds-map.diff.md) — Cria um novo mapa usando chaves que não estão em outro mapa
  - [Ds\Map::filter](ds-map.filter.md) — Cria um novo mapa usando um callable para determinar quais pares incluir
  - [Ds\Map::first](ds-map.first.md) — Retorna o primeiro par no mapa
  - [Ds\Map::get](ds-map.get.md) — Retorna o valor para uma chave dada
  - [Ds\Map::hasKey](ds-map.haskey.md) — Determina se o mapa contém uma chave dada
  - [Ds\Map::hasValue](ds-map.hasvalue.md) — Determina se o mapa contém um valor dado
  - [Ds\Map::intersect](ds-map.intersect.md) — Cria um novo mapa intersectando chaves com outro mapa
  - [Ds\Map::isEmpty](ds-map.isempty.md) — Retorna se o mapa está vazio
  - [Ds\Map::jsonSerialize](ds-map.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Map::keys](ds-map.keys.md) — Retorna um conjunto das chaves do mapa
  - [Ds\Map::ksort](ds-map.ksort.md) — Ordena o mapa no local pelo chave
  - [Ds\Map::ksorted](ds-map.ksorted.md) — Retorna uma cópia ordenada por chave
  - [Ds\Map::last](ds-map.last.md) — Retorna o último par do mapa
  - [Ds\Map::map](ds-map.map.md) — Retorna o resultado da aplicação de um callback a cada valor
  - [Ds\Map::merge](ds-map.merge.md) — Retorna o resultado da adição de todas as associações fornecidas
  - [Ds\Map::pairs](ds-map.pairs.md) — Retorna uma sequência contendo todos os pares do mapa
  - [Ds\Map::put](ds-map.put.md) — Associa uma chave a um valor
  - [Ds\Map::putAll](ds-map.putall.md) — Associa todos os pares chave-valor de um objeto traversable ou array
  - [Ds\Map::reduce](ds-map.reduce.md) — Reduz o mapa a um único valor usando uma função callback
  - [Ds\Map::remove](ds-map.remove.md) — Remove e retorna um valor pela chave
  - [Ds\Map::reverse](ds-map.reverse.md) — Inverte o mapa no local
  - [Ds\Map::reversed](ds-map.reversed.md) — Retorna uma cópia invertida
  - [Ds\Map::skip](ds-map.skip.md) — Retorna o par em uma posição específica
  - [Ds\Map::slice](ds-map.slice.md) — Retorna um subconjunto do mapa definido por um índice inicial e comprimento
  - [Ds\Map::sort](ds-map.sort.md) — Ordena o mapa no local pelo valor
  - [Ds\Map::sorted](ds-map.sorted.md) — Retorna uma cópia, ordenada por valor
  - [Ds\Map::sum](ds-map.sum.md) — Retorna a soma de todos os valores no mapa
  - [Ds\Map::toArray](ds-map.toarray.md) — Converte o mapa em um array
  - [Ds\Map::union](ds-map.union.md) — Cria um novo mapa usando valores da instância atual e de outro mapa
  - [Ds\Map::values](ds-map.values.md) — Retorna uma sequência dos valores do mapa
  - [Ds\Map::xor](ds-map.xor.md) — Cria um novo mapa usando chaves apenas do mapa atual ou de outro mapa, mas não de ambos
- [Ds\Pair](class.ds-pair.md) — A classe Pair
  - [Ds\Pair::clear](ds-pair.clear.md) — Remove todos os valores
  - [Ds\Pair::\_\_construct](ds-pair.construct.md) — Cria uma nova instância
  - [Ds\Pair::copy](ds-pair.copy.md) — Retorna uma cópia rasa do par
  - [Ds\Pair::isEmpty](ds-pair.isempty.md) — Retorna se o par está vazio
  - [Ds\Pair::jsonSerialize](ds-pair.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Pair::toArray](ds-pair.toarray.md) — Converte o par para um array
- [Ds\Set](class.ds-set.md) — A classe Set
  - [Ds\Set::add](ds-set.add.md) — Adiciona valores ao conjunto
  - [Ds\Set::allocate](ds-set.allocate.md) — Aloca memória suficiente para uma capacidade necessária
  - [Ds\Set::capacity](ds-set.capacity.md) — Retorna a capacidade atual
  - [Ds\Set::clear](ds-set.clear.md) — Remove todos os valores
  - [Ds\Set::\_\_construct](ds-set.construct.md) — Cria uma nova instância
  - [Ds\Set::contains](ds-set.contains.md) — Determina se o conjunto contém todos os valores
  - [Ds\Set::copy](ds-set.copy.md) — Retorna uma cópia rasa do conjunto
  - [Ds\Set::count](ds-set.count.md) — Retorna o número de valores no conjunto
  - [Ds\Set::diff](ds-set.diff.md) — Cria um novo conjunto usando valores que não estão em outro conjunto
  - [Ds\Set::filter](ds-set.filter.md) — Cria um novo conjunto usando um callable para
    determinar quais valores incluir
  - [Ds\Set::first](ds-set.first.md) — Retorna o primeiro valor no conjunto
  - [Ds\Set::get](ds-set.get.md) — Retorna o valor em um índice específico
  - [Ds\Set::intersect](ds-set.intersect.md) — Cria um novo conjunto interseccionando valores com outro conjunto
  - [Ds\Set::isEmpty](ds-set.isempty.md) — Retorna se o conjunto está vazio
  - [Ds\Set::join](ds-set.join.md) — Junta todos os valores em uma string
  - [Ds\Set::jsonSerialize](ds-set.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Set::last](ds-set.last.md) — Retorna o último valor no conjunto
  - [Ds\Set::map](ds-set.map.md) — Retorna o resultado da aplicação de um retorno de chamada a cada valor
  - [Ds\Set::merge](ds-set.merge.md) — Retorna o resultado da adição de todos os valores dados ao conjunto
  - [Ds\Set::reduce](ds-set.reduce.md) — Reduz o conjunto a um único valor usando uma função de callback
  - [Ds\Set::remove](ds-set.remove.md) — Remove todos os valores dados do conjunto
  - [Ds\Set::reverse](ds-set.reverse.md) — Inverte o conjunto no local
  - [Ds\Set::reversed](ds-set.reversed.md) — Retorna uma cópia invertida
  - [Ds\Set::slice](ds-set.slice.md) — Retorna um subconjunto de um intervalo dado
  - [Ds\Set::sort](ds-set.sort.md) — Ordena o conjunto no local
  - [Ds\Set::sorted](ds-set.sorted.md) — Retorna uma cópia ordenada
  - [Ds\Set::sum](ds-set.sum.md) — Retorna a soma de todos os valores no conjunto
  - [Ds\Set::toArray](ds-set.toarray.md) — Converte o conjunto para um array
  - [Ds\Set::union](ds-set.union.md) — Cria um novo conjunto usando valores da instância atual e de outro conjunto
  - [Ds\Set::xor](ds-set.xor.md) — Cria um novo conjunto usando valores na instância atual ou em outro conjunto, mas não em ambos
- [Ds\Stack](class.ds-stack.md) — A classe Stack
  - [Ds\Stack::allocate](ds-stack.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\Stack::capacity](ds-stack.capacity.md) — Retorna a capacidade atual
  - [Ds\Stack::clear](ds-stack.clear.md) — Remove todos os valores
  - [Ds\Stack::\_\_construct](ds-stack.construct.md) — Cria uma nova instância
  - [Ds\Stack::copy](ds-stack.copy.md) — Retorna uma cópia rasa da pilha
  - [Ds\Stack::count](ds-stack.count.md) — Retorna o número de valores na pilha
  - [Ds\Stack::isEmpty](ds-stack.isempty.md) — Retorna se a pilha está vazia
  - [Ds\Stack::jsonSerialize](ds-stack.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Stack::peek](ds-stack.peek.md) — Retorna o valor no topo da pilha
  - [Ds\Stack::pop](ds-stack.pop.md) — Remove e retorna o valor no topo da pilha
  - [Ds\Stack::push](ds-stack.push.md) — Empurra valores para a pilha
  - [Ds\Stack::toArray](ds-stack.toarray.md) — Converte a pilha para um array
- [Ds\Queue](class.ds-queue.md) — A classe Queue
  - [Ds\Queue::allocate](ds-queue.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\Queue::capacity](ds-queue.capacity.md) — Retorna a capacidade atual
  - [Ds\Queue::clear](ds-queue.clear.md) — Remove todos os valores
  - [Ds\Queue::\_\_construct](ds-queue.construct.md) — Cria uma nova instância
  - [Ds\Queue::copy](ds-queue.copy.md) — Retorna uma cópia rasa da fila
  - [Ds\Queue::count](ds-queue.count.md) — Retorna o número de valores na fila
  - [Ds\Queue::isEmpty](ds-queue.isempty.md) — Retorna se a fila está vazia
  - [Ds\Queue::jsonSerialize](ds-queue.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\Queue::peek](ds-queue.peek.md) — Retorna o valor no início da fila
  - [Ds\Queue::pop](ds-queue.pop.md) — Remove e retorna o valor no início da fila
  - [Ds\Queue::push](ds-queue.push.md) — Insere valores na fila
  - [Ds\Queue::toArray](ds-queue.toarray.md) — Converte a fila para um array
- [Ds\PriorityQueue](class.ds-priorityqueue.md) — A classe PriorityQueue
  - [Ds\PriorityQueue::allocate](ds-priorityqueue.allocate.md) — Aloca memória suficiente para uma capacidade requerida
  - [Ds\PriorityQueue::capacity](ds-priorityqueue.capacity.md) — Retorna a capacidade atual
  - [Ds\PriorityQueue::clear](ds-priorityqueue.clear.md) — Remove todos os valores
  - [Ds\PriorityQueue::\_\_construct](ds-priorityqueue.construct.md) — Cria uma nova instância
  - [Ds\PriorityQueue::copy](ds-priorityqueue.copy.md) — Retorna uma cópia rasa da fila
  - [Ds\PriorityQueue::count](ds-priorityqueue.count.md) — Retorna o número de valores na fila
  - [Ds\PriorityQueue::isEmpty](ds-priorityqueue.isempty.md) — Retorna se a fila está vazia
  - [Ds\PriorityQueue::jsonSerialize](ds-priorityqueue.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
  - [Ds\PriorityQueue::peek](ds-priorityqueue.peek.md) — Retorna o valor na frente da fila
  - [Ds\PriorityQueue::pop](ds-priorityqueue.pop.md) — Remove e retorna o valor com a maior prioridade
  - [Ds\PriorityQueue::push](ds-priorityqueue.push.md) — Adiciona valores na fila
  - [Ds\PriorityQueue::toArray](ds-priorityqueue.toarray.md) — Converte a fila para um array

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
