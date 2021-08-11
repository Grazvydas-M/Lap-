<?php


function getBebrai(): array
{
    if (!file_exists(__DIR__ . '/bebrai.json')) {
        $bebrai = ['juodieji' => 0, 'rudieji' => 0];
        $bebrai = json_encode($bebrai);                                         // paverte masyva i stringa
        file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
    }
    return json_decode(file_get_contents(__DIR__ . '/bebrai.json'), 1);         // parasom 1, kad stringa paverstu ne i objekta o i masyva
}

function setBebrai(array $bebrai): void
{
    $bebrai = json_encode($bebrai);
    file_put_contents(__DIR__ . '/bebrai.json', $bebrai);
}