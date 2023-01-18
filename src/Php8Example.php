<?php
namespace SymfonyUg\RectorPlayground;

class Php8Example
{
    public const ONE_CHOICE = 'string attribute';
    private $attr;

    public function __construct(string $attr = 'What a cool Symfony UG!')
    {
        $this->attr = $attr;
    }

    public function superDirtyFunctionWithLotOfOldStuffFromPhp7($coolInput)
    {
        switch ($coolInput) {
            case self::ONE_CHOICE:
                $variable = $this->heavyCoolOtherFunction();
                break;

            default:
                $variable = $this->superDooperFunction();
                break;
        }
        return $variable;

        return 'neverUsed';
    }

    public function heavyCoolOtherFunction()
    {
        return get_class(new ExampleInlineConstructorDefaultToPropertyRector());
    }
}