export default {
  namespaced: true,
  state: {
    data: [],
    moreBtn:false,
  },

  mutations: {
    SET_DATAS(state, value) {
      state.data.push(...value);
    },
    SET_NEXT_BTN(state,value) {
      state.moreBtn = value;
    }
  },

  getters: {
    getData: (state) => state.data,
    getMoreBtn: (state) => state.moreBtn,
  },

  actions: {
    fetchData({ commit }, formData) {
      axios.post(`${SETTINGS.endpoint}/homepage/blog`, formData).then((response) => {
        commit('SET_DATAS', response.data.posts);
        commit('SET_NEXT_BTN', response.data.nextPage);
      });
    },
  },
};
