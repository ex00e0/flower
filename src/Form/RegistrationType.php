<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

final class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Имя',
                'constraints' => [
                    new Assert\NotBlank(message: 'Имя не может быть пустым'),
                ],
            ])
            ->add('login', EmailType::class, [
                'label' => 'Электронная почта',
                'constraints' => [
                    new Assert\NotBlank(message: 'Email не может быть пустым'),
                    new Assert\Email(message: 'Некорректный email'),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Пароль',
                'constraints' => [
                    new Assert\NotBlank(message: 'Пароль не может быть пустым'),
                    new Assert\Length(
                        min: 6,
                        minMessage: 'Пароль должен содержать минимум 6 символов'
                    ),
                    new Assert\Regex(
                        pattern: '/\d/',
                        message: 'Пароль должен содержать хотя бы одну цифру'
                    ),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Зарегистрироваться',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
