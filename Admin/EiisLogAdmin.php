<?php

namespace Corp\EiisBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EiisLogAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('systemObjectCode')
            ->add('oldValue')
            ->add('newValue')
            ->add('eiisId')
            ->add('dateCreated')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('systemObjectCode')
            ->add('oldValue')
            ->add('newValue')
            ->add('eiisId')
            ->add('externalName')
            ->add('dateCreated')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {

    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('systemObjectCode')
            ->add('oldValue')
            ->add('newValue')
            ->add('eiisId')
            ->add('dateCreated')
        ;
    }
}
