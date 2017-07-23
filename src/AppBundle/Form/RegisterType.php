<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class RegisterType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', UserType::class)
            ->add('person', PersonType::class)
            ;

        if ('user_register' === $options['register']) {
            $builder->add('Registrarme',SubmitType::class,array(
                'attr'=> array('class' => 'btn btn-success')
            ));
        }else if('user_profile' === $options['register']){
            $builder->add('Actualizar',SubmitType::class,array(
                'attr'=> array('class' => 'btn btn-success')
            ));
        }
    }






    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Register',
            'register'=>'register'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_regiser';
    }


}
