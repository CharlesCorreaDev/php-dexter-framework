# Prepara-se para pedido de item Z39.50 com um pacote de solicitação ILL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-itemorder.php

---

# yaz\_itemorder

(PHP 4 >= 4.0.5, PECL yaz >= 0.9.0)

yaz\_itemorder — 
Prepara-se para pedido de item Z39.50 com um pacote de solicitação ILL

### Descrição

function **yaz\_itemorder**([resource](language.types.resource.md) `$id`, [array](language.types.array.md) `$args`): [void](language.types.void.md)

Esta função prepara uma solicitação de Serviços Estendidos usando o
Perfil para Uso do Serviço Estendido de Pedido de Item Z39.50 para
Transporte de ILL (Perfil/1). Consulte [» este URL](http://www.collectionscanada.ca/iso/ill/stanprf.htm)
e a [» especificação](http://www.collectionscanada.ca/iso/ill/document/standard/z-ill-1a.pdf).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`args`
:   Deve ser um array associativo com informações sobre a solicitação de Pedido de Item
    a ser enviada. A chave do hash é o nome do
    caminho da tag ASN.1 correspondente. Por exemplo, o ISBN abaixo do Item-ID
    tem a chave item-id,ISBN.

    Os parâmetros da solicitação ILL são:

    ```
    protocol-version-num
    transaction-id,initial-requester-id,person-or-institution-symbol,person
    transaction-id,initial-requester-id,person-or-institution-symbol,institution
    transaction-id,initial-requester-id,name-of-person-or-institution,name-of-person
    transaction-id,initial-requester-id,name-of-person-or-institution,name-of-institution
    transaction-id,transaction-group-qualifier
    transaction-id,transaction-qualifier
    transaction-id,sub-transaction-qualifier
    service-date-time,this,date
    service-date-time,this,time
    service-date-time,original,date
    service-date-time,original,time
    requester-id,person-or-institution-symbol,person
    requester-id,person-or-institution-symbol,institution
    requester-id,name-of-person-or-institution,name-of-person
    requester-id,name-of-person-or-institution,name-of-institution
    responder-id,person-or-institution-symbol,person
    responder-id,person-or-institution-symbol,institution
    responder-id,name-of-person-or-institution,name-of-person
    responder-id,name-of-person-or-institution,name-of-institution
    transaction-type
    delivery-address,postal-address,name-of-person-or-institution,name-of-person
    delivery-address,postal-address,name-of-person-or-institution,name-of-institution
    delivery-address,postal-address,extended-postal-delivery-address
    delivery-address,postal-address,street-and-number
    delivery-address,postal-address,post-office-box
    delivery-address,postal-address,city
    delivery-address,postal-address,region
    delivery-address,postal-address,country
    delivery-address,postal-address,postal-code
    delivery-address,electronic-address,telecom-service-identifier
    delivery-address,electronic-address,telecom-service-addreess
    billing-address,postal-address,name-of-person-or-institution,name-of-person
    billing-address,postal-address,name-of-person-or-institution,name-of-institution
    billing-address,postal-address,extended-postal-delivery-address
    billing-address,postal-address,street-and-number
    billing-address,postal-address,post-office-box
    billing-address,postal-address,city
    billing-address,postal-address,region
    billing-address,postal-address,country
    billing-address,postal-address,postal-code
    billing-address,electronic-address,telecom-service-identifier
    billing-address,electronic-address,telecom-service-addreess
    ill-service-type
    requester-optional-messages,can-send-RECEIVED
    requester-optional-messages,can-send-RETURNED
    requester-optional-messages,requester-SHIPPED
    requester-optional-messages,requester-CHECKED-IN
    search-type,level-of-service
    search-type,need-before-date
    search-type,expiry-date
    search-type,expiry-flag
    place-on-hold
    client-id,client-name
    client-id,client-status
    client-id,client-identifier
    item-id,item-type
    item-id,call-number
    item-id,author
    item-id,title
    item-id,sub-title
    item-id,sponsoring-body
    item-id,place-of-publication
    item-id,publisher
    item-id,series-title-number
    item-id,volume-issue
    item-id,edition
    item-id,publication-date
    item-id,publication-date-of-component
    item-id,author-of-article
    item-id,title-of-article
    item-id,pagination
    item-id,ISBN
    item-id,ISSN
    item-id,additional-no-letters
    item-id,verification-reference-source
    copyright-complicance
    retry-flag
    forward-flag
    requester-note
    forward-note
    ```

    Há também alguns parâmetros que fazem parte do pacote de Solicitação de Serviços Estendidos
    e do pacote ItemOrder:

    ```
    package-name
    user-id
    contact-name
    contact-phone
    contact-email
    itemorder-item
    ```

### Valor Retornado

Nenhum valor é retornado.

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
