import Axios from 'axios';
import { fetchList } from '@/api/article';

export default {
  // namespaced: true,
  state: {
    aws: 'https://larux.s3.us-east-2.amazonaws.com',
    image: 'kkk/6WxnCuHWVhxF3gW9iOzsh1dCQWLrGzk9QTOoexJa.png',
    menu: [],
    loading: true,
    menuFormDetail: false,
    menuFormVisible: false,
    currentMenu: {},
    formTitle: '',
    status: '',
    imagecropperShow: false,
    imagecropperKey: 0,
    total: 0,
    listQuery: {
      page: 1,
      limit: 20,
      importance: undefined,
      title: undefined,
      type: undefined,
      sort: '+id',
    },
  },

  actions: {
    async getList({ commit, state }) {
      // const listLoading = true;
      const { data } = await fetchList(state.listQuery);
      const list = data.items;
      const total = data.total;

      // Just to simulate the time of the request
      const listLoading = false;

      commit('PAGINATION_MENU_LIST', list);
      commit('PAGINATION_MENU_TOTAL', total);
      commit('PAGINATION_MENU_LIST_LOADING', listLoading);
    },
    async fetchAcyncMenu({ commit }) {
      const url = 'http://api:8888/navigation-menu';
      const response = await Axios.get(url);
      const { data } = response.data;
      const loading = false;
      commit('GET_MENU', data);
      commit('STATUS_LOADING', loading);
    },
    handleCreateForm({ commit }) {
      const menuFormVisible = true;
      const status = 'CREATE';
      const formTitle = 'Добавить новый пункт меню';
      const currentMenu = {
        name: ' ',
      };
      commit('STATUS_MENU_FORM', status);
      commit('MENU_FORM_VISIBLE', menuFormVisible);
      commit('MENU_FORM_TITLE', formTitle);
      commit('CURRENT_MENU', currentMenu);
    },
    async handleDetailForm({ commit, state }, id) {
      const menuFormVisible = true;
      const status = 'READ';
      const formTitle = 'Данные пункта меню:';
      const currentMenu = await state.menu.find(item => item.id === id);
      commit('STATUS_MENU_FORM', status);
      commit('MENU_FORM_VISIBLE', menuFormVisible);
      commit('MENU_FORM_TITLE', formTitle);
      commit('CURRENT_MENU', currentMenu);
    },
    async handleEditForm({ commit, state }, id) {
      const menuFormVisible = true;
      const status = 'UPDATE';
      const formTitle = 'Изменить пункт меню:';
      const currentMenu = await state.menu.find(item => item.id === id);
      commit('STATUS_MENU_FORM', status);
      commit('MENU_FORM_VISIBLE', menuFormVisible);
      commit('MENU_FORM_TITLE', formTitle);
      commit('CURRENT_MENU', currentMenu);
    },
    async handleDelete({ commit, state }, id){
      const menuFormVisible = true;
      const status = 'DELETE';
      const currentMenu = await state.menu.find(item => item.id === id);
      const formTitle = 'Удалить пункт меню: "' + currentMenu.name + '"';
      commit('STATUS_MENU_FORM', status);
      commit('MENU_FORM_VISIBLE', menuFormVisible);
      commit('MENU_FORM_TITLE', formTitle);
      commit('CURRENT_MENU', currentMenu);
    },
    closeForm({ commit }){
      const menuFormVisible = false;
      const imagecropperShow = false;
      commit('CLOSE_MENU_FORM_VISIBLE', menuFormVisible);
      commit('CLOSE_MENU_FORM_CROPEER', imagecropperShow);
    },
    openCropper({ commit }){
      const imagecropperShow = true;
      commit('STATUS_MENU_FORM_CROPEER', imagecropperShow);
    },
    closeCropper({ commit }){
      const imagecropperShow = false;
      commit('STATUS_MENU_FORM_CROPEER', imagecropperShow);
    },
    cropSuccess({ commit }, resData) {
      const imagecropperShow = false;
      const imagecropperKey = this.imagecropperKey + 1;
      const image = resData.files.avatar;
      commit('CLOSE_MENU_FORM_CROPEER', imagecropperShow);
      commit('KEY_FORM_CROPEER', imagecropperKey);
      commit('IMAGE_FORM_CROPEER', image);
    },
    async handleSubmit({ commit, state }) {
      try {
        if (state.status === 'CREATE') {
          const { data } = await Axios.post('http://api:8888/add-menu', {
            name: state.currentMenu.name,
          });
          await state.menu.push(data);
        } else if (state.status === 'UPDATE') {
          await Axios.post('http://api:8888/update-menu', {
            id: state.currentMenu.id,
            name: state.currentMenu.name,
          });
        } else if (state.status === 'DELETE') {
          await Axios.get('http://api:8888/delete-menu/' + state.currentMenu.id);
          const index = await state.menu.findIndex(item => item.id === state.currentMenu.id);
          await state.menu.splice(index, 1);
        }
      } catch (e) {
        console.error(e);
      } finally {
        const menuFormVisible = false;
        commit('SUBMIT_MENU_FORM_VISIBLE', menuFormVisible);
      }
    },
  },

  mutations: {
    GET_MENU: (state, data) => state.menu = data,
    STATUS_LOADING: (state, loading) => state.loading = loading,

    STATUS_MENU_FORM: (state, status) => state.status = status,
    MENU_FORM_VISIBLE: (state, menuFormVisible) => state.menuFormVisible = menuFormVisible,
    MENU_FORM_TITLE: (state, formTitle) => state.formTitle = formTitle,
    CURRENT_MENU: (state, currentMenu) => state.currentMenu = currentMenu,

    CLOSE_MENU_FORM_VISIBLE: (state, menuFormVisible) => state.menuFormVisible = menuFormVisible,
    SUBMIT_MENU_FORM_VISIBLE: (state, menuFormVisible) => state.menuFormVisible = menuFormVisible,

    STATUS_MENU_FORM_CROPEER: (state, imagecropperShow) => state.imagecropperShow = imagecropperShow,
    KEY_FORM_CROPEER: (state, imagecropperKey) => state.imagecropperKey = imagecropperKey,

    PAGINATION_MENU_LIST: (state, list) => state.list = list,
    PAGINATION_MENU_TOTAL: (state, total) => state.total = total,
    PAGINATION_MENU_LIST_LOADING: (state, listLoading) => state.listLoading = listLoading,
    PAGE: (state, page) => state.listQuery.page = page,
    LIMIT: (state, limit) => state.listQuery.limit = limit,
  },
}
