<?php

namespace App\Helper;

class PersoHelper
{
    const PERSOS = [
        [
            'clan' => "human",
            'class' => "barbare",
            'sex' => "man",
            'image' => "images/cards/persos/cards_barbareH.png",
        ], [
            'clan' => "human",
            'class' => "barbare",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_barbareF.png",
        ], [
            'clan' => "human",
            'class' => "archer",
            'sex' => "man",
            'image' => "images/cards/persos/cards_archerH.png",
        ], [
            'clan' => "human",
            'class' => "archer",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_archerF.png",
        ], [
            'clan' => "human",
            'class' => "moine",
            'sex' => "man",
            'image' => "images/cards/persos/cards_moineH.png",
        ], [
            'clan' => "human",
            'class' => "moine",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_moineF.png",
        ], [
            'clan' => "spirit",
            'class' => "barbare",
            'sex' => "man",
            'image' => "images/cards/persos/cards_barbareH_MAL.png",
        ], [
            'clan' => "spirit",
            'class' => "barbare",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_barbareF_MAL.png",
        ], [
            'clan' => "spirit",
            'class' => "archer",
            'sex' => "man",
            'image' => "images/cards/persos/cards_archerH_MAL.png",
        ], [
            'clan' => "spirit",
            'class' => "archer",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_archerF_MAL.png",
        ], [
            'clan' => "spirit",
            'class' => "moine",
            'sex' => "man",
            'image' => "images/cards/persos/cards_moineH_MAL.png",
        ], [
            'clan' => "spirit",
            'class' => "moine",
            'sex' => "woman",
            'image' => "images/cards/persos/cards_moineF_MAL.png",
        ],
    ];

    public static function getClasses(): array
    {
        $classes = [];
        foreach (self::PERSOS as $perso) {
            $classes[] = $perso['class'];
        }
        return array_values(array_unique($classes));
    }

    public static function getClans(): array
    {
        $clans = [];
        foreach (self::PERSOS as $perso) {
            $clans[] = $perso['clan'];
        }
        return array_values(array_unique($clans));
    }

    public static function getSexes(): array
    {
        $sexes = [];
        foreach (self::PERSOS as $perso) {
            $sexes[] = $perso['sex'];
        }
        return array_values(array_unique($sexes));
    }
}
