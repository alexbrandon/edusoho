<?php

namespace Biz\Card\Service;

interface CardService
{
    public function addCard($card);

    public function getCard($id);

    public function getCardByCardId($cardId);

    public function getCardByUserId($userId);

    public function getCardByCardIdAndCardType($cardId, $cardType);

    public function searchCards($conditions, $orderBy, $start, $limit);

    public function updateCardByCardIdAndCardType($cardId, $cardType, $fields);

    public function findCardsByUserIdAndCardType($userId, $cardType);

    public function findCardDetailByCardTypeAndCardId($cardType, $id);

    public function findCardDetailsByCardTypeAndCardIds($cardType, $ids);

    public function findCardsByCardIds($cardIds);

    public function sortArrayByField(array $array, $field);

    public function sortArrayByKey(array $array, $key);
}