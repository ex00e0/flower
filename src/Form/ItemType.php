<?php

namespace App\Form;

use App\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Название',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Название не может быть пустым']),
                ],
            ])
            ->add('description', TextType::class, [
                'label' => 'Описание',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Описание не может быть пустым']),
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Изображение товара',
                'mapped' => false, 
                'required' => false, 
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Допустимые форматы: JPEG, PNG, WEBP',
                    ])
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Цена',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Цена не может быть пустой']),
                    new Assert\PositiveOrZero([
                        'message' => 'Цена не может быть отрицательной', 
                    ]),
                ],
                'invalid_message' => 'Введите число',
            ])
            ->add('last', NumberType::class, [
                'label' => 'Количество на складе',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Укажите количество товара']),
                    new Assert\PositiveOrZero([
                        'message' => 'Количество не может быть отрицательным', 
                    ]),
                ],
                'invalid_message' => 'Введите число',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }
}
