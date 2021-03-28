const getters = {
  sidebar: state => state.app.sidebar,
  language: state => state.app.language,
  size: state => state.app.size,
  device: state => state.app.device,
  visitedViews: state => state.tagsView.visitedViews,
  cachedViews: state => state.tagsView.cachedViews,
  userId: state => state.user.id,
  token: state => state.user.token,
  avatar: state => state.user.avatar,
  name: state => state.user.name,
  introduction: state => state.user.introduction,
  roles: state => state.user.roles,
  permissions: state => state.user.permissions,
  permission_routes: state => state.permission.routes,
  addRoutes: state => state.permission.addRoutes,
  //
  aws: state => state.menu.aws,
  image: state => state.menu.image,
  imagecropperShow: state => state.menu.imagecropperShow,
  imagecropperKey: state => state.menu.imagecropperKey,
  //
  menuAll: state => state.menu.menu,
  loading: state => state.menu.loading,
  menuCount: state => state.menu.menu.length,
  status: state => state.menu.status,
  menuFormVisible: state => state.menu.menuFormVisible,
  formTitle: state => state.menu.formTitle,
  currentMenu: state => state.menu.currentMenu,
  //
  list: state => state.menu.list,
  total: state => state.menu.total,
  listLoading: state => state.menu.listLoading,
  page: state => state.menu.listQuery.page,
  limit: state => state.menu.listQuery.limit,

  listQuery: state => state.menu.listQuery,
};
export default getters;
