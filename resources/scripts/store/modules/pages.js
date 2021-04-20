export default {
  namespaced: true,
  state: {
    data: {},
  },

  mutations: {
    SET_DATAS(state, value) {
      state.data = value;
    },
  },

  getters: {
    getData: (state) => state.data,
  },

  actions: {
    fetchData({ commit }, formData) {
      axios.post(`${SETTINGS.endpoint}/pages/detail`, formData).then((response) => {
        commit('SET_DATAS', response.data);
      });
    },
  },
};
