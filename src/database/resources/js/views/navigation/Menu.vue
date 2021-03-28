<template>
  <div class="app-container">
    <!--    Дабавить данные-->
    <div class="filter-container">
      Список пунктов меню сайта. Всего записей - {{menuCount}}<br>
      <hr>
      <el-button class="filter-item" type="primary" icon="el-icon-plus" @click="handleCreateForm">
        {{ $t('table.add') }}
      </el-button>

    </div>
    <!--    Данные формы-->
    <el-table v-loading="loading" :data="menuAll" border fit highlight-current-row>
      <el-table-column align="center" label="ном" width="50" type="index">
      </el-table-column>

      <el-table-column align="center" label="Имя" >
        <template slot-scope="scope">
          <span><strong>{{ scope.row.name }}</strong></span>
        </template>
      </el-table-column>
      <el-table-column align="center" label="Фото" width="150">
          <img :src="`${ aws }/${ image }`" alt="#" class="pan-thumb">
      </el-table-column>
      <el-table-column align="center" label="Действие" width="200">
        <template slot-scope="scope">
          <el-button
            icon="el-icon-view"
            size="small"
            type="success"
            @click="handleDetailForm( scope.row.id )"
          >
          </el-button>
          <el-button
            icon="el-icon-edit"
            size="small"
            type="primary"
            @click="handleEditForm( scope.row.id )"
          >
          </el-button>
          <el-button
            icon="el-icon-delete"
            size="small"
            type="danger"
            @click="handleDelete( scope.row.id, scope.row.name )"
          >
          </el-button>
        </template>
      </el-table-column>
    </el-table>
    <el-dialog :title="formTitle" :visible.sync="menuFormVisible">
      <div class="form-container">
        <el-form
          ref="menuForm"
          :model="currentMenu"
          label-position="left"
          label-width="150px"
          style="max-width: 500px"
        >
          <el-form-item label="Пункт меню:" prop="name" v-if="status == 'CREATE'">
            <el-input v-model="currentMenu.name" />
            <div style="margin-top: 30px;">
              <image-cropper
                field="file"
                v-show="imagecropperShow"
                :key="imagecropperKey"
                :width="500"
                :height="300"
                url="http://api:8888/image-upload"
                lang-type="ru"
                @close="closeCropper"
                @crop-upload-success="cropSuccess"
                stepCircle="true"
              />
              <br>
              <el-button type="primary" icon="upload" style="position: absolute;bottom: 23px;" @click="openCropper">
                Добавить фото
              </el-button>
            </div>
          </el-form-item>

          <el-form-item label="Пункт меню:" prop="name" v-if="status == 'UPDATE'">
            <el-input v-model="currentMenu.name" />
            <div style="margin-top: 30px;">
              <div :style="{zIndex:zIndex,height:height,width:width}" :class="{'pan-item': 1, 'pan-item-hover': hoverable}">
                 <img :src="`storage/avatars/wTF6Owp0LOaUjDXPnhqoPdsn35qRXgG9mMWQixDL.png`" alt="#" class="pan-thumb">
              <image-cropper
                field="file"
                v-show="imagecropperShow"
                :key="imagecropperKey"
                :width="500"
                :height="300"
                url="http://api:8888/image-upload"
                lang-type="ru"
                @close="closeCropper"
                @crop-upload-success="cropSuccess"
                stepCircle="true"
              />
              <br>
              <el-button type="primary" icon="upload" style="position: absolute;bottom: 23px;" @click="openCropper">
                Изменить фото
              </el-button>
              </div>
            </div>
          </el-form-item>

          <el-form-item label="Пункт меню:" prop="name" v-if="status == 'READ'">
            <strong><el-input v-html="currentMenu.name" /></strong>
            <el-form-item label="Фото" prop="photo">
              <img :src="`https://assasasassasa.s3.us-east-2.amazonaws.com/gost_57410384_orig_.jpg`" alt="#" class="pan-thumb">
            </el-form-item>

          </el-form-item>
        </el-form>
        <div slot="footer" class="dialog-footer">
          <el-button @click="closeForm">
            Закрыть
          </el-button>
          <el-button type="primary" @click="handleSubmit( status )" v-if="status !== 'READ'">
            Применить
          </el-button>
        </div>
      </div>
    </el-dialog>

    <pagination v-show="3>0" :total="6" :page.sync="menu" :limit.sync="limit" @pagination="getList" />

  </div>
</template>

<script>
  // import {createNamespacedHelpers} from 'vuex'
  // const {mapActions} = createNamespacedHelpers ('menu')

import ImageCropper from '@/components/ImageCropper/index';
import Pagination from '@/components/Pagination'; // Secondary package based on el-pagination


import { mapGetters, mapActions } from 'vuex';

export default {
  components: { ImageCropper, Pagination },
  computed: mapGetters([
    'listQuery',
    'total',
    'page',
    'limit',
    'listLoading',
    'aws',
    'image',
    'menuAll',
    'loading',
    'menuCount',
    'menuFormVisible',
    'imagecropperShow',
    'imagecropperKey',
    'formTitle',
    'currentMenu',
    'status',
  ]),
  methods: mapActions([
    'getList',
    'fetchAcyncMenu',
    'handleCreateForm',
    'handleDetailForm',
    'handleEditForm',
    'handleDelete',
    'closeForm',
    'openCropper',
    'closeCropper',
    'cropSuccess',
    'handleSubmit',
  ]),

  mounted() {
    this.fetchAcyncMenu();
  },
};
</script>

<style scoped>
  .pan-item {
    width: 200px;
    height: 200px;
    border-radius: 10%;
    display: inline-block;
    position: relative;
    cursor: default;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  }

  .pan-info-roles-container {
    padding: 20px;
    text-align: center;
  }

  .pan-thumb {
    width: 100%;
    height: 100%;
    background-size: 100%;
    border-radius: 10%;
    overflow: hidden;
    position: relative;
    transform-origin: 95% 40%;
    transition: all 0.3s ease-in-out;
  }

  .pan-thumb:after {
    content: '';
    width: 8px;
    height: 8px;
    position: relative;
    border-radius: 10%;
    top: 40%;
    left: 95%;
    margin: -4px 0 0 -4px;
    background: radial-gradient(ellipse at center, rgba(14, 14, 14, 1) 0%, rgba(125, 126, 125, 1) 100%);
    box-shadow: 0 0 1px rgba(255, 255, 255, 0.9);
  }

  .pan-info {
    position: absolute;
    width: inherit;
    height: inherit;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: inset 0 0 0 5px rgba(0, 0, 0, 0.05);
  }

  .pan-info h3 {
    color: #fff;
    text-transform: uppercase;
    position: relative;
    letter-spacing: 2px;
    font-size: 18px;
    margin: 0 60px;
    padding: 22px 0 0 0;
    height: 85px;
    font-family: 'Open Sans', Arial, sans-serif;
    text-shadow: 0 0 1px #fff, 0 1px 2px rgba(0, 0, 0, 0.3);
  }

  .pan-info p {
    color: #fff;
    padding: 10px 5px;
    font-style: italic;
    margin: 0 30px;
    font-size: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
  }

  .pan-info p a {
    display: block;
    color: #333;
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 10%;
    color: #fff;
    font-style: normal;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 9px;
    letter-spacing: 1px;
    padding-top: 24px;
    margin: 7px auto 0;
    font-family: 'Open Sans', Arial, sans-serif;
    opacity: 0;
    transition: transform 0.3s ease-in-out 0.2s, opacity 0.3s ease-in-out 0.2s, background 0.2s linear 0s;
    transform: translateX(60px) rotate(90deg);
  }

  .pan-info p a:hover {
    background: rgba(255, 255, 255, 0.5);
  }

  .pan-item-hover:hover .pan-thumb {
    transform: rotate(0deg);
  }

  .pan-item-hover:hover .pan-info p a {
    opacity: 1;
    transform: translateX(0px) rotate(0deg);
  }
</style>
