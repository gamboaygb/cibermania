<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PostCommentNotLoginType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentTitle',TextType::class,array(
                'attr'=> array('class' => 'form-control','placeholder'=>'Título *'),
                'label'=>'Título *',
            ))

            ->add('comment',TextareaType::class,array(
            'attr'=> array('class' => 'form-control','placeholder'=>'Escribe aquí tu comentario'),
            'label'=>'Déjanos tu opinión *',
            ))
            ->add('name',TextType::class,array(
                'attr'=> array('class' => 'form-control','placeholder'=>'Nombre Completo'),
                'label'=>'Nombre Completo *',
            ))
            ->add('email',EmailType::class,array(
                'attr'=> array('class' => 'form-control','placeholder'=>'Correo Electrónico'),
                'label'=>'Correo Electrónico *',
            ))
            ->add('website',TextType::class,array(
                'attr'=> array('class' => 'form-control','placeholder'=>'http://cibermania.es','id'=>'website'),
                'label'=>'Web:',
                'required'=>false,
            ))
            ->add('isUser',CheckboxType::class,array(
                'label'    => 'Desmarca esta casilla si no quieres registrarte en cibermania',
                'required' => false,
                'attr'=>array('checked'   => 'checked'),
            ))
            ->add('enviar',SubmitType::class,array(
                'attr'=> array('class' => 'form-control btn btn-success'),
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\PostCommentNotLogin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_postcommentnotlogin';
    }


}
