<?php

namespace App\Form\Type;

use App\Form\Dto\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('eventTitle', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Bootshaus...'
                ]
            ])
            ->add('eventDate', DateType::class, [
                'required' => false,
                'widget' => 'single_text'
            ])
            ->add('eventCity', TextType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Cologne'
                ]
            ])
            ->add('tickets', CollectionType::class, [
                'label' => false,
                'entry_type' => TicketType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Event::class,
            ]
        );
    }
}