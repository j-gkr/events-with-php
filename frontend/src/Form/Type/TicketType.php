<?php

namespace App\Form\Type;

use App\Form\Dto\Event;
use App\Form\Dto\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('barcode', TextType::class, [
                'required' => false,
            ])
            ->add('firstName', TextType::class, [
                'required' => false,
            ])
            ->add('lastName', TextType::class, [
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Ticket::class,
            ]
        );
    }
}