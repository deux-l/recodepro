import * as React from 'react';
import { View, Text, FlatList, StyleSheet, Image} from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import Icon from 'react-native-vector-icons/FontAwesome';
import { Input, Button } from 'react-native-elements';


function TelaLogin({ navigation }) {
  return (
    <View style={styles.container}>

    <Text>Lista de desejos do kadu!</Text>

<Image source={require('./assets/logo.png')} style={styles.logo}/>
   



<Input style={styles.input} 
    placeholder="Digite Usuario 'Kadu'" 
    leftIcon={{ type: 'font-awesome', name: 'envelope'}}
    />

<Input style={styles.input} 
    placeholder="Digite qualquer senha" 
    leftIcon={{ type: 'font-awesome', name: 'key'}}
    secureTextEntry={true}
    />

<Button
icon={
  <Icon
    name="arrow-right"
    size={15}
    color="white"
  />
}
iconRight
title="Entrar"
onPress={() => navigation.navigate('Lista')}
/>   


  </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: 'column',
    backgroundColor: "white",
    alignItems: "center",
    justifyContent: "center",
  },
  input: {
    marginTop: 10,
    padding: 5,
    fontSize: 15,
    borderRadius: 15,
    backgroundColor: '#fff',
    marginBottom: 10,
  },
  logo: {
    width: 75,
    height: 49,
    alignItems: "center",
    justifyContent: "center"
  }
});


function ListaDesejos({ navigation }) {

  const DATA = [
    {
      id: '01',
      title: 'Gravel bike',
    },
    {
      id: '02',
      title: 'Mais disciplina',
    },
    {
      id: '03',
      title: 'Pizza grátis todo sabado a noite',
    },
    {
      id: '04',
      title: 'Aprender programação',
    },
    {
      id: '05',
      title: 'Nintendo Switch',
    },
    {
      id: '06',
      title: 'Saúde sempre',
    },
    {
      id: '07',
      title: 'Tennis novo',
    },
    {
      id: '08',
      title: 'Casa Propria',
    },
    {
      id: '09',
      title: 'Arrumar um bom emprego',
    },
    {
      id: '10',
      title: 'Paz de espirito',
    },
  ];
  
  const Item = ({ title }) => (
    <View style={stylesLista.item}>
      <Text style={stylesLista.title}>{title}</Text>
    </View>
  );
  
  const renderItem = ({ item }) => (
    <Item title={item.title} />)
  
  return (
    <View style={{ flex: 1, alignItems: 'center', justifyContent: 'center' }}>
      <FlatList
        data={DATA}
        renderItem={renderItem}
        keyExtractor={item => item.id}
      />
    </View>
  );
}
const stylesLista = StyleSheet.create({
  item: {
    backgroundColor: 'aquamarine',
    borderRadius: 50,
    padding: 20,
    marginVertical: 8,
    marginHorizontal: 16,
    alignItems: "center",
    justifyContent: "center",
  },
  title: {
    fontSize: 20,
  },
});

const Stack = createStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Login">
        <Stack.Screen name="Login" component={TelaLogin} />
        <Stack.Screen name="Lista" component={ListaDesejos} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

export default App;
