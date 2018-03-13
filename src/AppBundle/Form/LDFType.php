<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 12.03.2018
 * Time: 13:36
 */

namespace AppBundle\Form;


use AppBundle\Entity\LDF;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LDFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', IntegerType::class)
            ->add('bazisCode', TextType::class)
            ->add('name',TextType::class)
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=>LDF::class]);
    }
}