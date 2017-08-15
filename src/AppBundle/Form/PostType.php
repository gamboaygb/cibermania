<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',TextType::class,array(
                                                    'attr'=> array('class' => 'form-control','placeholder'=>'Título'),
                                                    'label'=>'Título del Artículo'
                                                    ))
            ->add('category',EntityType::class,array(
                        'class' => 'AppBundle:Category',
                        'multiple' => true,
                        'expanded' => true,
                        'label'=>'Seleccione una categoría',
                        'attr'=> array('class' => '')
                    ))
            ->add('content',TextareaType::class,array(
                                                        'attr'=> array('class' => 'form-control','placeholder'=>'Contenido'),
                                                         'label'=>'Contenido del Artículo'
                                                    ))
            ->add('photoPath',FileType::class,array(
                'attr'=> array('class' => 'form-control'),
                'required'=>false,
                'label'=>false,
            ))
        ;

        if ('create_post' === $options['create']) {
            $builder->add('Crear post',SubmitType::class,array(
                'attr'=> array('class' => 'btn btn-success')
            ));
        }else if('edit_post' === $options['create']){
            $builder
                ->add('Actualizar',SubmitType::class,array(
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
            'data_class' => 'AppBundle\Entity\Post',
            'create'=>'create'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_post';
    }


}
